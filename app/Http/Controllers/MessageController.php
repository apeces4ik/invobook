<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request, Ticket $ticket)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $message = Message::create([
            'ticket_id' => $ticket->id,
            'content' => $request->content,
            'user_id' => Auth::id(),
            'admin_id' => null,
            'is_admin' => false,
        ]);

        return response()->json([
            'id' => $message->id,
            'content' => $message->content,
            'created_at' => $message->created_at->format('d.m.Y H:i'),
            'user' => [
                'id' => $message->user->id,
                'name' => $message->user->name,
            ],
        ]);
    }

    public function markAsRead(Request $request, Ticket $ticket)
    {
        $ticket->messages()
            ->whereNull('read_at')
            ->where('is_admin', true)
            ->update(['read_at' => now()]);

        return response()->json(['success' => true]);
    }
}
