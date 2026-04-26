<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChatRequest;

class ChatController extends Controller
{
    /**
     * Show chat page
     */
    public function index(Request $request)
    {
        $authId     = Auth::id();
        $receiverId = $request->get('user');

        $receiver = $receiverId ? User::find($receiverId) : null;

        $messages = [];
        if ($receiver) {
            $messages = Message::where('sender_id', $authId)
                ->where('receiver_id', $receiverId)
                ->orWhere(function ($query) use ($authId, $receiverId) {
                    $query->where('sender_id', $receiverId)
                          ->where('receiver_id', $authId);
                })
                ->orderBy('created_at', 'asc')
                ->get();
        }


        $conversations = User::where('id', '!=', $authId)->get();


        $onlineUsers = User::where('id', '!=', $authId)->get();

        $totalMessages = Message::where('sender_id', $authId)
            ->orWhere('receiver_id', $authId)
            ->count();

        $totalConversations = $conversations->count();

        return view('chat', compact(
            'receiver',
            'messages',
            'conversations',
            'onlineUsers',
            'totalMessages',
            'totalConversations'
        ));
    }

    /**
     * Send a message — returns the saved message as JSON (including created_at).
     */
    public function sendMessage(ChatRequest $request)
    {
        $message=$request->validated();

        $message = Message::create(array_merge($message,['sender_id'   => Auth::id()]));




        return response()->json($message->fresh());
    }

    /**
     * Get messages for a conversation (AJAX).
     */
    public function getMessages($userId)
    {
        $authId = Auth::id();

        $messages = Message::where('sender_id', $authId)
            ->where('receiver_id', $userId)
            ->orWhere(function ($query) use ($authId, $userId) {
                $query->where('sender_id', $userId)
                      ->where('receiver_id', $authId);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }
}
