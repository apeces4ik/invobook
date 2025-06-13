<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Ticket;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('ticket.{ticket}', function ($user, Ticket $ticket) {
    // Разрешаем доступ админам
    if (auth()->guard('admin')->check()) {
        return true;
    }
    
    // Разрешаем доступ владельцу тикета
    return (int) $user->id === (int) $ticket->user_id;
});
