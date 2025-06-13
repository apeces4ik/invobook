@extends('layouts.admin')

@section('content')
<div class="max-w-5xl mx-auto py-8">
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-xl font-semibold">Управление заявками</h3>
        </div>
        <div class="px-6 py-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Тема</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Пользователь</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Статус</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Приоритет</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Создано</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Действия</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse($tickets as $ticket)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $ticket->id }}</td>
                                <td class="px-4 py-2">
                                    <div>
                                        <div class="font-semibold text-gray-900">{{ $ticket->subject }}</div>
                                        <div class="text-xs text-gray-500">{{ Str::limit($ticket->description, 50) }}</div>
                                    </div>
                                    @php
                                        $unreadCount = $ticket->messages->where('is_admin', false)->whereNull('read_at')->count();
                                    @endphp
                                    @if($unreadCount > 0)
                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">{{ $unreadCount }}</span>
                                    @endif
                                </td>
                                <td class="px-4 py-2">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold">{{ strtoupper(substr($ticket->user->name, 0, 1)) }}</div>
                                        <div>
                                            <div class="font-semibold text-gray-900">{{ $ticket->user->name }}</div>
                                            <div class="text-xs text-gray-500">{{ $ticket->user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-2">
                                    <select class="rounded-md border-gray-300 text-xs focus:border-blue-500 focus:ring-blue-500 status-select" data-ticket-id="{{ $ticket->id }}" data-url="{{ route('admin.tickets.update-status', $ticket) }}">
                                        <option value="open" {{ $ticket->status === 'open' ? 'selected' : '' }}>Открыта</option>
                                        <option value="in_progress" {{ $ticket->status === 'in_progress' ? 'selected' : '' }}>В работе</option>
                                        <option value="closed" {{ $ticket->status === 'closed' ? 'selected' : '' }}>Закрыта</option>
                                    </select>
                                </td>
                                <td class="px-4 py-2">
                                    <span class="inline-block px-2 py-1 rounded text-xs font-medium
                                        @if($ticket->priority === 'high') bg-red-100 text-red-800
                                        @elseif($ticket->priority === 'medium') bg-yellow-100 text-yellow-800
                                        @else bg-blue-100 text-blue-800
                                        @endif">
                                        {{ $ticket->priority === 'high' ? 'Высокий' : ($ticket->priority === 'medium' ? 'Средний' : 'Низкий') }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 text-xs text-gray-500" title="{{ $ticket->created_at->format('d.m.Y H:i:s') }}">
                                    {{ $ticket->created_at->diffForHumans() }}
                                </td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('admin.tickets.show', $ticket) }}" class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded hover:bg-blue-700 transition">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m6 0a6 6 0 11-12 0 6 6 0 0112 0z" /></svg>
                                        Просмотр
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-8 text-gray-400">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4" /></svg>
                                        <p class="mb-0">Нет активных заявок</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        @if($tickets->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50 rounded-b-lg">
                {{ $tickets->links() }}
            </div>
        @endif
    </div>
</div>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.status-select').forEach(select => {
        select.addEventListener('change', function() {
            const url = this.dataset.url;
            const status = this.value;
            const token = document.querySelector('meta[name="csrf-token"]').content;

            fetch(url, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json'
                },
                body: JSON.stringify({ status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Можно добавить уведомление об успешном обновлении
                }
            })
            .catch(error => {
                // Можно добавить уведомление об ошибке
            });
        });
    });
});
</script>
@endpush
@endsection 