@extends('layouts.app')

@section('title', 'Портфолио — IvASoft')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">Наше портфолио</h1>
            <div class="w-20 h-1 mx-auto bg-[#FFA500] rounded mb-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="300">
                Ознакомьтесь с нашими последними проектами, которые демонстрируют наш опыт и подход к работе.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
    </div>

    <!-- Portfolio Projects Section -->
    <div class="max-w-6xl mx-auto -mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=400&q=80" alt="FinTrack Pro" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">FinTrack Pro</div>
                <div class="text-xs text-gray-500 mb-2">Мобильные приложения, Финтех</div>
                <p class="text-gray-600 text-sm mb-2">Разработка кроссплатформенного мобильного приложения для управления личными финансами с аналитикой и прогнозированием расходов.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80" alt="RetailInsight" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">RetailInsight</div>
                <div class="text-xs text-gray-500 mb-2">Веб-разработка, Big Data</div>
                <p class="text-gray-600 text-sm mb-2">Разработка системы бизнес-аналитики для розничной сети с предиктивным анализом спроса и оптимизацией запасов.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                <img src="https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?auto=format&fit=crop&w=400&q=80" alt="LogiFlow" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">LogiFlow</div>
                <div class="text-xs text-gray-500 mb-2">Логистика, Автоматизация</div>
                <p class="text-gray-600 text-sm mb-2">Создание комплексного решения для управления логистическими процессами с оптимизацией маршрутов и отслеживанием в реальном времени.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="400">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=400&q=80" alt="EduSmart" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">EduSmart</div>
                <div class="text-xs text-gray-500 mb-2">Образование, SaaS</div>
                <p class="text-gray-600 text-sm mb-2">Платформа для онлайн-обучения с интерактивными курсами, тестированием и аналитикой для преподавателей.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="500">
                <img src="https://images.unsplash.com/photo-1453928582365-b6ad33cbcf64?auto=format&fit=crop&w=400&q=80" alt="MedCare" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">MedCare</div>
                <div class="text-xs text-gray-500 mb-2">Медицина, Веб</div>
                <p class="text-gray-600 text-sm mb-2">Веб-портал для записи к врачу, хранения медицинских данных и онлайн-консультаций.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="600">
                <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=400&q=80" alt="AutoFleet" class="rounded-lg mb-4 object-cover h-36 w-full">
                <div class="font-bold text-lg mb-1">AutoFleet</div>
                <div class="text-xs text-gray-500 mb-2">Транспорт, IoT</div>
                <p class="text-gray-600 text-sm mb-2">Система мониторинга автопарка с датчиками IoT, аналитикой и мобильным приложением для водителей.</p>
                <a href="#" class="text-[#1E90FF] hover:underline text-sm font-semibold">Подробнее &rarr;</a>
            </div>
        </div>
    </div>

    <!-- Advantages Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Почему выбирают нас?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div class="font-semibold mb-2">Индивидуальный подход</div>
                    <div class="text-gray-600 text-sm">Каждый проект — уникален. Мы подбираем решения под задачи клиента.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/></svg>
                    </div>
                    <div class="font-semibold mb-2">Современные технологии</div>
                    <div class="text-gray-600 text-sm">Используем только актуальные инструменты и лучшие практики разработки.</div>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"/></svg>
                    </div>
                    <div class="font-semibold mb-2">Прозрачность и поддержка</div>
                    <div class="text-gray-600 text-sm">Открыто информируем о ходе работ и всегда на связи с клиентом.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 