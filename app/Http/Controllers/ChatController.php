<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Show chat page
     */
    public function index(Request $request)
    {
        $authId = Auth::id();
        $receiverId = $request->get('user');

        // Get the selected user (person you're chatting with)
        $receiver = $receiverId ? User::find($receiverId) : null;

        // Get messages between you and the selected user
        $messages = [];
        if ($receiver) {
            $messages = Message::where('sender_id', $authId)
                ->where('receiver_id', $receiverId)
                ->orWhere(function($query) use ($authId, $receiverId) {
                    $query->where('sender_id', $receiverId)
                          ->where('receiver_id', $authId);
                })
                ->orderBy('created_at', 'asc')
                ->get();
        }

        // Get all other users for the conversations list
        $conversations = User::where('id', '!=', $authId)->get();

        // Get all other users for online users sidebar
        $onlineUsers = User::where('id', '!=', $authId)->get();

        // Count total messages
        $totalMessages = Message::where('sender_id', $authId)
            ->orWhere('receiver_id', $authId)
            ->count();

        // Count total conversations (other users)
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
     * Send a message
     */
    public function sendMessage(Request $request)
    {
        // Validate input
        $request->validate([
            'receiver_id' => 'required',
            'message' => 'required',
        ]);

        // Create the message
        $message = Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        // Return the message as JSON
        return response()->json($message);
    }

    /**
     * Get messages for a conversation
     */
    public function getMessages($userId)
    {
        $authId = Auth::id();

        // Get messages between two users
        $messages = Message::where('sender_id', $authId)
            ->where('receiver_id', $userId)
            ->orWhere(function($query) use ($authId, $userId) {
                $query->where('sender_id', $userId)
                      ->where('receiver_id', $authId);
            })
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }
}
