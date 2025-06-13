<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - IvASoft Platform</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-xl font-bold text-blue-600">IvASoft Admin</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Заявки -->
                    <div class="bg-white overflow-hidden shadow rounded-lg">
                        <div class="p-5">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                </div>
                                <div class="ml-5 w-0 flex-1">
                                    <dl>
                                        <dt class="text-sm font-medium text-gray-500 truncate">
                                            Заявки
                                        </dt>
                                        <dd class="flex items-baseline">
                                            <div class="text-2xl font-semibold text-gray-900">
                                                {{ \App\Models\Ticket::count() }}
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-5 py-3">
                            <div class="text-sm">
                                <a href="{{ route('admin.tickets.index') }}" class="font-medium text-[#1E90FF] hover:text-[#1873CC]">
                                    Посмотреть все заявки
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Последние заявки -->
                    <div class="bg-white overflow-hidden shadow rounded-lg col-span-2">
                        <div class="p-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                Последние заявки
                            </h3>
                            <div class="space-y-4">
                                @forelse(\App\Models\Ticket::with('user')->latest()->take(5)->get() as $ticket)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate">{{ $ticket->title }}</p>
                                            <p class="text-xs text-gray-500">
                                                {{ $ticket->user->name }} • {{ $ticket->created_at->format('d.m.Y H:i') }}
                                            </p>
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
                                @empty
                                    <p class="text-gray-600 text-sm">Нет заявок</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- Статистика по статусам -->
                    <div class="bg-white overflow-hidden shadow rounded-lg col-span-3">
                        <div class="p-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                                Статистика по статусам
                            </h3>
                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <p class="text-sm font-medium text-green-800">Открытые</p>
                                    <p class="text-2xl font-semibold text-green-900">
                                        {{ \App\Models\Ticket::where('status', 'open')->count() }}
                                    </p>
                                </div>
                                <div class="bg-yellow-50 p-4 rounded-lg">
                                    <p class="text-sm font-medium text-yellow-800">В работе</p>
                                    <p class="text-2xl font-semibold text-yellow-900">
                                        {{ \App\Models\Ticket::where('status', 'in_progress')->count() }}
                                    </p>
                                </div>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <p class="text-sm font-medium text-gray-800">Закрытые</p>
                                    <p class="text-2xl font-semibold text-gray-900">
                                        {{ \App\Models\Ticket::where('status', 'closed')->count() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> 