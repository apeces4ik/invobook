@extends('layouts.app')

@section('title', 'О нас — IvASoft')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">О нас</h1>
            <div class="w-20 h-1 mx-auto bg-[#FFA500] rounded mb-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="300">
                Мы команда профессионалов с многолетним опытом в IT-индустрии, специализирующаяся на разработке программного обеспечения, мобильных и веб-приложений.
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-6xl mx-auto -mt-8 px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-3xl font-bold text-blue-600 mb-2" data-count="1">256</div>
                <div class="text-gray-600">Успешных проектов</div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-3xl font-bold text-blue-600 mb-2" data-count="1">1283</div>
                <div class="text-gray-600">Довольных клиентов</div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="text-3xl font-bold text-blue-600 mb-2" data-count="5">10</div>
                <div class="text-gray-600">Лет опыта</div>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="text-3xl font-bold text-blue-600 mb-2" data-count="7">7</div>
                <div class="text-gray-600">Специалистов</div>
            </div>
        </div>
    </div>

    <!-- Mission Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
            <div class="bg-white rounded-xl shadow-lg p-8 transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Наша миссия</h3>
                </div>
                <p class="text-gray-600">Создавать инновационные IT-решения, которые делают бизнес наших клиентов более эффективным и конкурентоспособным на рынке.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">История компании</h3>
                </div>
                <p class="text-gray-600">Основанная в 2020 году группой энтузиастов, наша компания за короткий срок превратилась в надёжного партнёра для десятков клиентов.</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-8 transform hover:scale-105 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Наша команда</h3>
                </div>
                <p class="text-gray-600">У нас работают высококвалифицированные специалисты с опытом в различных сферах IT: от веб-разработки до искусственного интеллекта.</p>
            </div>
        </div>
    </div>

    <!-- Competencies Section -->
    <div class="py-16">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center px-4">
            <div data-aos="fade-right" data-aos-delay="100">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Наши компетенции</h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600">Разработка программного обеспечения для бизнеса</span>
                    </li>
                    <li class="flex items-start">
                        <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600">Создание мобильных приложений для iOS и Android</span>
                    </li>
                    <li class="flex items-start">
                        <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600">Веб-разработка с использованием современных технологий</span>
                    </li>
                    <li class="flex items-start">
                        <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600">Решения в области искусственного интеллекта и Big Data</span>
                    </li>
                    <li class="flex items-start">
                        <span class="flex-shrink-0 w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-1">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <span class="text-gray-600">Техническая поддержка и сопровождение проектов</span>
                    </li>
                </ul>
            </div>
            <div class="relative" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute -inset-4 bg-blue-100 rounded-2xl transform rotate-3"></div>
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=80" 
                     alt="Команда IvASoft" 
                     class="relative rounded-xl shadow-lg w-full object-cover">
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12" data-aos="fade-up">Отзывы наших клиентов</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">ООО "ТехноПром"</h3>
                            <p class="text-gray-600">Производственная компания</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Благодаря IvASoft мы смогли автоматизировать ключевые бизнес-процессы и увеличить эффективность работы на 40%."</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">ИП Смирнов А.В.</h3>
                            <p class="text-gray-600">Розничная торговля</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Отличная команда профессионалов! Разработали для нас удобное мобильное приложение, которое помогло увеличить продажи."</p>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Анимация счетчиков
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000; // 2 секунды
        const step = target / (duration / 16); // 60 FPS
        let current = 0;

        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target;
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current);
            }
        }, 16);
    }

    // Запуск анимации при появлении элемента в viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('[data-count]');
                counters.forEach(counter => animateCounter(counter));
                observer.unobserve(entry.target);
            }
        });
    });

    document.querySelectorAll('.max-w-6xl').forEach(section => {
        observer.observe(section);
    });
</script>
@endpush
@endsection 