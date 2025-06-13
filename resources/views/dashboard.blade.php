@extends('layouts.app')

@section('title', 'Личный кабинет — IvASoft')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Добро пожаловать, {{ Auth::user()->name }}!</h1>
        <p class="text-gray-600">Управляйте своими проектами и взаимодействуйте с командой IvASoft.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Активные проекты -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Активные проекты</h2>
                <span class="bg-blue-100 text-[#1E90FF] text-sm font-medium px-2.5 py-0.5 rounded">0</span>
            </div>
            <div class="space-y-3">
                <p class="text-gray-600 text-sm">У вас пока нет активных проектов.</p>
                <a href="{{ route('tickets.create') }}" class="inline-flex items-center text-sm text-[#1E90FF] hover:text-[#1873CC]">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Создать новый проект
                </a>
            </div>
        </div>

        <!-- Мои заявки -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Мои заявки</h2>
                <span class="bg-blue-100 text-[#1E90FF] text-sm font-medium px-2.5 py-0.5 rounded">{{ Auth::user()->tickets()->count() }}</span>
            </div>
            <div class="space-y-3">
                @forelse(Auth::user()->tickets()->latest()->take(5)->get() as $ticket)
                    <a href="{{ route('tickets.show', $ticket) }}" class="block">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate">{{ $ticket->title }}</p>
                                <p class="text-xs text-gray-500">{{ $ticket->created_at->format('d.m.Y H:i') }}</p>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                    @if($ticket->status === 'open') bg-green-100 text-green-800
                                    @elseif($ticket->status === 'in_progress') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800
                                    @endif">
                                    {{ $ticket->status === 'open' ? 'Открыта' : ($ticket->status === 'in_progress' ? 'В работе' : 'Закрыта') }}
                                </span>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-gray-600 text-sm">У вас пока нет заявок.</p>
                @endforelse
                <a href="{{ route('tickets.create') }}" class="inline-flex items-center text-sm text-[#1E90FF] hover:text-[#1873CC]">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Создать новую заявку
                </a>
            </div>
        </div>

        <!-- Последние уведомления -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Уведомления</h2>
                <span class="bg-orange-100 text-[#FFA500] text-sm font-medium px-2.5 py-0.5 rounded">0</span>
            </div>
            <div class="space-y-3">
                <p class="text-gray-600 text-sm">Нет новых уведомлений.</p>
            </div>
        </div>

        <!-- Профиль -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg font-semibold text-gray-900">Ваш профиль</h2>
                <a href="#" class="text-sm text-[#1E90FF] hover:text-[#1873CC]">Редактировать</a>
            </div>
            <div class="space-y-3">
                <div class="flex items-center space-x-3 text-sm text-gray-600">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <div class="flex items-center space-x-3 text-sm text-gray-600">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Аккаунт создан {{ Auth::user()->created_at->format('d.m.Y') }}</span>
                </div>
            </div>
        </div>

        <!-- Быстрые действия -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Быстрые действия</h2>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('tickets.create') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-8 h-8 text-[#1E90FF] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-700">Новая заявка</span>
                </a>
                <a href="#" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-8 h-8 text-[#FFA500] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-700">Чат поддержки</span>
                </a>
            </div>
        </div>

        <!-- Статистика -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Ваша статистика</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Завершенные проекты</span>
                    <span class="text-sm font-medium text-gray-900">0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Активные задачи</span>
                    <span class="text-sm font-medium text-gray-900">0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-600">Время в системе</span>
                    <span class="text-sm font-medium text-gray-900">{{ Auth::user()->created_at->diffForHumans(null, true) }}</span>
                </div>
            </div>
        </div>

        <!-- Последние действия -->
        <div class="bg-white rounded-lg shadow-sm p-6">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Последние действия</h2>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0">
                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-4 h-4 text-[#1E90FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Вы вошли в систему</p>
                        <p class="text-xs text-gray-400">{{ now()->format('d.m.Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 