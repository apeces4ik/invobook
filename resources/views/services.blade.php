@extends('layouts.app')

@section('title', 'Услуги — IvASoft')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">Наши услуги</h1>
            <div class="w-20 h-1 mx-auto bg-[#FFA500] rounded mb-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="300">
                Мы предлагаем широкий спектр IT-услуг, адаптированных под потребности вашего бизнеса.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
    </div>

    <!-- Services Section -->
    <div class="max-w-6xl mx-auto -mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">Разработка ПО</span>
                </div>
                <p class="text-gray-600">Создание кастомного программного обеспечения для автоматизации и оптимизации бизнес-процессов.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="150">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="7" y="4" width="10" height="16" rx="2"/><path d="M11 5h2"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">Мобильные приложения</span>
                </div>
                <p class="text-gray-600">Разработка нативных и кроссплатформенных мобильных приложений для iOS и Android.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a10 10 0 0 1 0 20"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">Веб-разработка</span>
                </div>
                <p class="text-gray-600">Создание современных веб-сайтов и веб-приложений с адаптивным дизайном.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="250">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 17v-2a4 4 0 014-4h4"/><path d="M17 21v-2a4 4 0 00-4-4H9"/><circle cx="12" cy="12" r="10"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">Интеграция систем</span>
                </div>
                <p class="text-gray-600">Интеграция различных сервисов, API и платформ для единой экосистемы вашего бизнеса.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"/><circle cx="12" cy="12" r="10"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">Техническая поддержка</span>
                </div>
                <p class="text-gray-600">Круглосуточная поддержка, сопровождение и развитие ваших IT-решений.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 flex flex-col items-start hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="350">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01"/><circle cx="12" cy="12" r="10"/></svg>
                    </div>
                    <span class="font-bold text-lg text-gray-800">IT-консалтинг</span>
                </div>
                <p class="text-gray-600">Анализ, аудит и рекомендации по развитию IT-инфраструктуры и цифровой трансформации.</p>
            </div>
        </div>
    </div>

    <!-- Work Process Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Как мы работаем</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl text-[#FFA500] mb-2 font-bold">1</div>
                    <div class="font-semibold mb-2">Анализ и консультация</div>
                    <div class="text-gray-600 text-sm">Погружаемся в задачи клиента, обсуждаем цели и подбираем оптимальные решения.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl text-[#FFA500] mb-2 font-bold">2</div>
                    <div class="font-semibold mb-2">Проектирование</div>
                    <div class="text-gray-600 text-sm">Создаём архитектуру, прототипы и согласовываем детали будущего продукта.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl text-[#FFA500] mb-2 font-bold">3</div>
                    <div class="font-semibold mb-2">Разработка и тестирование</div>
                    <div class="text-gray-600 text-sm">Воплощаем проект в жизнь, проводим тестирование и устраняем ошибки.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl text-[#FFA500] mb-2 font-bold">4</div>
                    <div class="font-semibold mb-2">Запуск и поддержка</div>
                    <div class="text-gray-600 text-sm">Запускаем продукт, обучаем сотрудников и обеспечиваем поддержку.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-16">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Часто задаваемые вопросы</h2>
            <div class="space-y-6">
                <div class="bg-white rounded-xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="font-semibold mb-2 text-[#1E90FF]">Сколько времени занимает разработка проекта?</div>
                    <div class="text-gray-600 text-sm">Сроки зависят от сложности задачи. В среднем, MVP можно реализовать за 2-6 недель.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="font-semibold mb-2 text-[#1E90FF]">Можно ли доработать существующий проект?</div>
                    <div class="text-gray-600 text-sm">Да, мы берёмся за доработку и оптимизацию уже существующих решений.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="font-semibold mb-2 text-[#1E90FF]">Оказываете ли вы техническую поддержку?</div>
                    <div class="text-gray-600 text-sm">Да, мы предлагаем различные пакеты поддержки и сопровождения.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 