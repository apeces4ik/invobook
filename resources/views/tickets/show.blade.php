@extends('layouts.app')

@section('title', 'Тикет #' . $ticket->id . ': ' . $ticket->subject)

@section('content')
<div class="max-w-3xl mx-auto py-8">
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h4 class="text-lg font-semibold">Тикет #{{ $ticket->id }}: {{ $ticket->subject }}</h4>
            <a href="{{ route('tickets.index') }}" class="inline-flex items-center text-sm text-gray-500 hover:text-blue-600 transition px-3 py-1 border border-gray-300 rounded-md">Назад к списку</a>
        </div>
        <div class="px-6 py-6">
            <div class="mb-6 bg-gray-50 rounded-lg p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p><span class="font-semibold">Статус:</span> <span class="inline-block px-2 py-1 rounded text-xs {{ $ticket->status === 'open' ? 'bg-green-100 text-green-800' : ($ticket->status === 'in_progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-200 text-gray-700') }}">{{ $ticket->status === 'open' ? 'Открыт' : ($ticket->status === 'in_progress' ? 'В работе' : 'Закрыт') }}</span></p>
                        <p><span class="font-semibold">Создан:</span> {{ $ticket->created_at->format('d.m.Y H:i') }}</p>
                    </div>
                    <div>
                        <p><span class="font-semibold">Приоритет:</span> <span class="inline-block px-2 py-1 rounded text-xs {{ $ticket->priority === 'high' ? 'bg-red-100 text-red-800' : ($ticket->priority === 'medium' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800') }}">{{ $ticket->priority === 'high' ? 'Высокий' : ($ticket->priority === 'medium' ? 'Средний' : 'Низкий') }}</span></p>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="font-semibold">Описание:</span>
                    <p class="mt-2 text-gray-700">{{ $ticket->description }}</p>
                </div>
            </div>
            <div class="mb-6">
                <div class="bg-gray-100 rounded-lg p-4 max-h-96 overflow-y-auto" id="messages-container">
                    @foreach($ticket->messages as $message)
                        <div class="mb-4 flex {{ $message->is_admin ? 'justify-end' : 'justify-start' }}">
                            <div class="max-w-xs px-4 py-2 rounded-lg shadow {{ $message->is_admin ? 'bg-blue-600 text-white' : 'bg-white border' }}">
                                <div class="flex items-center justify-between mb-1">
                                    <span class="font-semibold text-xs">{{ $message->is_admin ? $message->admin->name : $message->user->name }}</span>
                                    <span class="text-xs opacity-70 ml-2">{{ $message->created_at->format('d.m.Y H:i') }}</span>
                                </div>
                                <div class="text-sm">{{ $message->content }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <form id="message-form" class="mt-4 flex gap-2">
                    @csrf
                    <input type="hidden" id="ticket-id" value="{{ $ticket->id }}">
                    <input type="text" id="message-input" class="flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm" placeholder="Введите сообщение...">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const messageForm = document.getElementById('message-form');
    const messageInput = document.getElementById('message-input');
    const messagesContainer = document.getElementById('messages-container');
    const ticketId = document.getElementById('ticket-id').value;

    function appendMessage(message) {
        const messageElement = document.createElement('div');
        messageElement.className = 'mb-4 flex ' + (message.is_admin ? 'justify-end' : 'justify-start');
        messageElement.innerHTML = `
            <div class="max-w-xs px-4 py-2 rounded-lg shadow ${message.is_admin ? 'bg-blue-600 text-white' : 'bg-white border'}">
                <div class="flex items-center justify-between mb-1">
                    <span class="font-semibold text-xs">${message.admin ? message.admin.name : message.user.name}</span>
                    <span class="text-xs opacity-70 ml-2">${message.created_at}</span>
                </div>
                <div class="text-sm">${message.content}</div>
            </div>
        `;
        messagesContainer.appendChild(messageElement);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    async function sendMessage(content) {
        try {
            const response = await fetch(`/tickets/${ticketId}/messages`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ content })
            });
            if (!response.ok) throw new Error('Failed to send message');
            const message = await response.json();
            appendMessage(message);
            messageInput.value = '';
        } catch (error) {
            alert('Не удалось отправить сообщение. Пожалуйста, попробуйте еще раз.');
        }
    }

    messageForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const content = messageInput.value.trim();
        if (content) {
            sendMessage(content);
        }
    });

    async function checkNewMessages() {
        try {
            const response = await fetch(`/tickets/${ticketId}/messages`);
            const messages = await response.json();
            messagesContainer.innerHTML = '';
            messages.forEach(message => appendMessage(message));
        } catch (error) {}
    }
    setInterval(checkNewMessages, 5000);
});
</script>
@endpush
@endsection 