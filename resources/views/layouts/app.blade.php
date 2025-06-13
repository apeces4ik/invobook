<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IvASoft — IT-решения любой сложности">
    <title>@yield('title', 'IvASoft — IT-решения любой сложности')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#f5f5f5] h-full">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between h-16 px-4">
            <a href="/" class="text-2xl font-bold select-none">
                <span class="text-[#1E90FF]">IvA</span><span class="text-[#FFA500]">Soft</span>
            </a>
            <nav class="flex items-center space-x-8">
                <a href="/" class="text-base font-medium text-gray-900 hover:text-[#1E90FF] @if(request()->routeIs('home')) text-[#1E90FF] font-semibold @endif">Главная</a>
                <a href="/about" class="text-base font-medium text-gray-900 hover:text-[#FFA500] @if(request()->routeIs('about')) text-[#FFA500] font-semibold @endif">О нас</a>
                <a href="/services" class="text-base font-medium text-gray-900 hover:text-[#1E90FF] @if(request()->routeIs('services')) text-[#1E90FF] font-semibold @endif">Услуги</a>
                <a href="/portfolio" class="text-base font-medium text-gray-900 hover:text-[#1E90FF] @if(request()->routeIs('portfolio')) text-[#1E90FF] font-semibold @endif">Портфолио</a>
                <a href="/contact" class="text-base font-medium text-gray-900 hover:text-[#1E90FF] @if(request()->routeIs('contact')) text-[#1E90FF] font-semibold @endif">Контакты</a>
            </nav>
            @auth
                <div x-data="{ open: false }" class="relative ml-6">
                    <button 
                        @click.stop="open = !open" 
                        type="button"
                        class="flex items-center space-x-2 text-gray-700 hover:text-[#1E90FF] focus:outline-none"
                    >
                        <span class="font-medium">{{ Auth::user()->name }}</span>
                        <svg 
                            class="w-5 h-5 transition-transform duration-200" 
                            :class="{'rotate-180': open}"
                            fill="none" 
                            stroke="currentColor" 
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div 
                        x-show="open" 
                        x-cloak
                        @click.self="open = false"
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 scale-95" 
                        x-transition:enter-end="opacity-100 scale-100" 
                        x-transition:leave="transition ease-in duration-150" 
                        x-transition:leave-start="opacity-100 scale-100" 
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50"
                    >
                        <a href="{{ route('dashboard') }}" 
                           @click.stop
                           class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                        >
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Личный кабинет
                        </a>
                        <form method="POST" action="{{ route('logout') }}" @click.stop>
                            @csrf
                            <button type="submit" 
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors duration-150"
                            >
                                <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Выйти
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-[#1E90FF] hover:bg-[#1873CC] text-white rounded font-medium flex items-center transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12H3m0 0l4-4m-4 4l4 4m13-4a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Войти
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-[#1E90FF] hover:bg-[#1873CC] text-white rounded font-medium flex items-center transition">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        Регистрация
                    </a>
                </div>
            @endauth
        </div>
    </header>

    <main class="min-h-[60vh]">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#232323] text-white mt-12">
        <div class="max-w-7xl mx-auto py-10 px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="text-2xl font-bold mb-2">
                    <span class="text-[#1E90FF]">IvA</span><span class="text-[#FFA500]">Soft</span>
                </div>
                <p class="text-gray-300 mb-4">IT-решения любой сложности для вашего бизнеса. Мы помогаем компаниям расти и развиваться в цифровую эпоху.</p>
                <p class="text-gray-400 text-sm">© {{ date('Y') }} IvASoft. Все права защищены.</p>
            </div>
            <div>
                <h4 class="font-semibold mb-2 text-[#FFA500]">Услуги</h4>
                <ul class="space-y-1 text-gray-300">
                    <li>Разработка ПО</li>
                    <li>Мобильные приложения</li>
                    <li>Веб-разработка</li>
                    <li>AI и Big Data</li>
                    <li>Техническая поддержка</li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-2 text-[#FFA500]">Компания</h4>
                <ul class="space-y-1 text-gray-300">
                    <li><a href="/about" class="hover:text-[#1E90FF]">О нас</a></li>
                    <li><a href="/portfolio" class="hover:text-[#1E90FF]">Портфолио</a></li>
                    <li><a href="#" class="hover:text-[#1E90FF]">Карьера</a></li>
                    <li><a href="#" class="hover:text-[#1E90FF]">Блог</a></li>
                    <li><a href="/contact" class="hover:text-[#1E90FF]">Контакты</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold mb-2 text-[#FFA500]">Свяжитесь с нами</h4>
                <ul class="space-y-1 text-gray-300">
                    <li><span class="inline-block w-5">📍</span> Республика Крым, Симферополь, проспект Академика Вернадского, 4</li>
                    <li><span class="inline-block w-5">📞</span> +7(978) 519-74-72</li>
                    <li><span class="inline-block w-5">✉️</span> ivasoft@internet.ru</li>
                </ul>
                <div class="flex space-x-3 mt-4">
                    <a href="#" class="text-gray-400 hover:text-[#1E90FF]" title="Telegram"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9.04 16.29l-.39 3.67c.56 0 .8-.24 1.09-.53l2.62-2.49 5.44 3.98c1 .55 1.72.26 1.97-.92l3.58-16.76c.32-1.48-.54-2.06-1.5-1.7L2.36 9.16c-1.45.56-1.43 1.36-.25 1.72l4.6 1.44 10.67-6.72c.5-.32.96-.14.58.18"/></svg></a>
                    <a href="#" class="text-gray-400 hover:text-[#1E90FF]" title="VK"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.02 17.52h-1.1c-3.2 0-5.12-2.13-5.2-5.7h1.7c.07 2.1 1.2 3.1 3.1 3.1h.2v-2.2c-2.1-.2-4.3-1.3-4.3-4.2 0-2.1 1.5-3.3 4.1-3.3h.2v1.6c-1.6.1-2.4.7-2.4 1.7 0 1.1.9 1.6 2.4 1.7v-3.3h1.1v3.3c1.5-.1 2.4-.6 2.4-1.7 0-1-.8-1.6-2.4-1.7v-1.6h.2c2.6 0 4.1 1.2 4.1 3.3 0 2.9-2.2 4-4.3 4.2v2.2h.2c1.9 0 3.1-1 3.1-3.1h1.7c-.08 3.57-2 5.7-5.2 5.7z"/></svg></a>
                    <a href="#" class="text-gray-400 hover:text-[#1E90FF]" title="GitHub"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 2.87 8.17 6.84 9.5.5.09.66-.22.66-.48 0-.24-.01-.87-.01-1.7-2.78.6-3.37-1.34-3.37-1.34-.45-1.15-1.1-1.46-1.1-1.46-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.89 1.52 2.34 1.08 2.91.83.09-.65.35-1.08.63-1.33-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.11 2.51.32 1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.85-2.34 4.7-4.57 4.95.36.31.68.92.68 1.85 0 1.33-.01 2.4-.01 2.73 0 .27.16.58.67.48A10.01 10.01 0 0022 12c0-5.52-4.48-10-10-10z"/></svg></a>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-400 text-sm pb-4">Разработано с <span class="text-[#FFA500]">♥</span> командой IvASoft</div>
    </footer>

    <style>
        [x-cloak] { 
            display: none !important; 
        }
    </style>

    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true
            });
        }
    </script>
</body>
</html> 