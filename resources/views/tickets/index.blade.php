@extends('layouts.app')

@section('title', 'Мои заявки — IvASoft')

@section('content')
<div class="max-w-4xl mx-auto py-8">
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h3 class="text-xl font-semibold">Мои заявки</h3>
            <a href="{{ route('tickets.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                Новая заявка
            </a>
        </div>
        <div class="px-6 py-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">#</th>
                            <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Тема</th>
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
                                    <div class="font-semibold text-gray-900">{{ $ticket->subject }}</div>
                                    <div class="text-xs text-gray-500">{{ Str::limit($ticket->description, 50) }}</div>
                                </td>
                                <td class="px-4 py-2">
                                    <span class="inline-block px-2 py-1 rounded text-xs font-medium {{ $ticket->status === 'open' ? 'bg-green-100 text-green-800' : ($ticket->status === 'in_progress' ? 'bg-yellow-100 text-yellow-800' : 'bg-gray-200 text-gray-700') }}">
                                        {{ $ticket->status === 'open' ? 'Открыт' : ($ticket->status === 'in_progress' ? 'В работе' : 'Закрыт') }}
                                    </span>
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
                                    <a href="{{ route('tickets.show', $ticket) }}" class="inline-flex items-center px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded hover:bg-blue-700 transition">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m6 0a6 6 0 11-12 0 6 6 0 0112 0z" /></svg>
                                        Просмотр
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-8 text-gray-400">
                                    <div class="flex flex-col items-center">
                                        <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6m16 0v6a2 2 0 01-2 2H6a2 2 0 01-2-2v-6m16 0H4" /></svg>
                                        <p class="mb-0">У вас пока нет заявок</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 