<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminTicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with(['user', 'messages' => function($query) {
            $query->latest();
        }])
        ->latest()
        ->paginate(10);

        return view('admin.tickets.index', compact('tickets'));
    }

    public function show(Ticket $ticket)
    {
        $ticket->load(['user', 'messages.user', 'messages.admin']);
        return view('admin.tickets.show', compact('ticket'));
    }

    public function updateStatus(Request $request, Ticket $ticket)
    {
        $request->validate([
            'status' => 'required|in:open,in_progress,closed'
        ]);

        $ticket->update([
            'status' => $request->status
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Статус тикета обновлен'
        ]);
    }
} 