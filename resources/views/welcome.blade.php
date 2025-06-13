@extends('layouts.app')

@section('title', 'IvASoft - Инновационные IT-решения')

@section('content')
    <!-- Главный экран -->
    <div class="hero-gradient pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    <span class="gradient-text">Инновационные IT-решения</span><br>
                    для вашего бизнеса
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Мы создаем современные технологические решения, которые помогают бизнесу расти и развиваться в цифровую эпоху.
                </p>
                <div class="flex justify-center space-x-4">
                    <a href="/contact" class="bg-[#1E90FF] text-white px-8 py-3 rounded hover:bg-[#1873CC] transition-colors text-lg font-semibold">
                        Начать проект
                    </a>
                    <a href="/services" class="border-2 border-[#1E90FF] text-[#1E90FF] px-8 py-3 rounded hover:bg-[#1E90FF] hover:text-white transition-colors text-lg font-semibold">
                        Наши услуги
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Преимущества -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Почему выбирают нас</h2>
                <div class="w-16 h-1 bg-[#1E90FF] mx-auto rounded"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 rounded-xl bg-white shadow-lg card-hover" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-12 h-12 bg-[#1E90FF] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#1E90FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Скорость разработки</h3>
                    <p class="text-gray-600">Быстрая реализация проектов без потери качества благодаря современным технологиям и методологиям.</p>
                </div>
                <div class="p-6 rounded-xl bg-white shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-12 h-12 bg-[#1E90FF] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#1E90FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Безопасность</h3>
                    <p class="text-gray-600">Гарантированная защита данных и соблюдение всех стандартов информационной безопасности.</p>
                </div>
                <div class="p-6 rounded-xl bg-white shadow-lg card-hover" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-12 h-12 bg-[#1E90FF] bg-opacity-10 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#1E90FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Поддержка 24/7</h3>
                    <p class="text-gray-600">Круглосуточная техническая поддержка и оперативное решение возникающих вопросов.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Услуги -->
    <div class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Наши услуги</h2>
                <div class="w-16 h-1 bg-[#1E90FF] mx-auto rounded"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=500&q=80" alt="Веб-разработка" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Веб-разработка</h3>
                        <p class="text-gray-600 mb-4">Создание современных веб-приложений с использованием передовых технологий.</p>
                        <a href="/services" class="text-[#1E90FF] hover:text-[#4169E1] font-semibold">Подробнее →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=500&q=80" alt="Мобильные приложения" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Мобильные приложения</h3>
                        <p class="text-gray-600 mb-4">Разработка нативных и кроссплатформенных мобильных приложений.</p>
                        <a href="/services" class="text-[#1E90FF] hover:text-[#4169E1] font-semibold">Подробнее →</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden card-hover" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=500&q=80" alt="Консультации" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">IT-консультации</h3>
                        <p class="text-gray-600 mb-4">Профессиональные консультации по цифровой трансформации бизнеса.</p>
                        <a href="/services" class="text-[#1E90FF] hover:text-[#4169E1] font-semibold">Подробнее →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Контакты -->
    <div class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Свяжитесь с нами</h2>
                <div class="w-16 h-1 bg-[#1E90FF] mx-auto rounded"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-gray-50 rounded-xl p-8" data-aos="fade-right">
                    <h3 class="text-2xl font-semibold mb-6">Наши контакты</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-[#1E90FF] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span class="text-gray-600">+7 (978) 519-74-72</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-[#1E90FF] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span class="text-gray-600">info@ivasoft.ru</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-[#1E90FF] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span class="text-gray-600">Республика Крым, Симферополь, проспект Академика Вернадского, 4</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 rounded-xl p-8" data-aos="fade-left">
                    <h3 class="text-2xl font-semibold mb-6">Напишите нам</h3>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Ваше имя" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#1E90FF] focus:ring-2 focus:ring-[#1E90FF] focus:ring-opacity-20 outline-none transition-colors">
                        </div>
                        <div>
                            <input type="email" placeholder="Ваш email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#1E90FF] focus:ring-2 focus:ring-[#1E90FF] focus:ring-opacity-20 outline-none transition-colors">
                        </div>
                        <div>
                            <textarea placeholder="Ваше сообщение" rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#1E90FF] focus:ring-2 focus:ring-[#1E90FF] focus:ring-opacity-20 outline-none transition-colors"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-[#1E90FF] hover:bg-[#1873CC] text-white font-semibold py-2 px-4 rounded transition-colors">
                            Отправить сообщение
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>

    <style>
        .gradient-text {
            background: linear-gradient(135deg, #1E90FF 0%, #4169E1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
@endsection 