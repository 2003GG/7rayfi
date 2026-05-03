<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    // Show chat page
    public function index(Request $request)
    {
        // Get all users except me
        $users = User::where('id', '!=', Auth::id())->get();

        $receiver = null;
        $messages = [];

        // If I selected a user to chat with
        if ($request->has('user')) {
            $receiver = User::find($request->user);

            // Get all messages between me and this user
            $messages = Message::where('sender_id', Auth::id())
                ->where('receiver_id', $request->user)
                ->orWhere('sender_id', $request->user)
                ->where('receiver_id', Auth::id())
                ->orderBy('created_at', 'asc')
                ->get();
        }

        return view('chat', compact('users', 'receiver', 'messages'));
    }

    // Send a message
    public function sendMessage(Request $request)
    {
        // Save message to database
        Message::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true]);
    }
}
