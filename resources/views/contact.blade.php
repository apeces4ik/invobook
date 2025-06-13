@extends('layouts.app')

@section('title', 'Контакты — IvASoft')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-4xl mx-auto text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4" data-aos="fade-down">Контакты</h1>
            <div class="w-20 h-1 mx-auto bg-[#FFA500] rounded mb-6" data-aos="zoom-in" data-aos-delay="200"></div>
            <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="300">
                Свяжитесь с нами — мы всегда открыты для новых идей и сотрудничества!
            </p>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent"></div>
    </div>

    <!-- Contact Info & Form Section -->
    <div class="max-w-6xl mx-auto -mt-8 px-4 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
            <!-- Контактная информация -->
            <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-right" data-aos-delay="100">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Наши контакты</h2>
                <ul class="space-y-5">
                    <li class="flex items-center">
                        <span class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-full mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </span>
                        <span class="text-gray-700 text-lg">ivasoft@internet.ru</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-full mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </span>
                        <span class="text-gray-700 text-lg">+7 (978) 519-74-72</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-full mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        </span>
                        <span class="text-gray-700 text-lg">@ivasoft</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-10 h-10 flex items-center justify-center bg-blue-100 rounded-full mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 12.414a8 8 0 111.414-1.414l4.243 4.243a1 1 0 01-1.414 1.414z"/></svg>
                        </span>
                        <span class="text-gray-700 text-lg">Республика Крым, Симферополь, проспект Академика Вернадского, 4</span>
                    </li>
                </ul>
            </div>
            <!-- Форма обратной связи -->
            <div class="bg-white rounded-xl shadow-lg p-8" data-aos="fade-left" data-aos-delay="200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Форма обратной связи</h2>
                <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Имя</label>
                        <input type="text" name="name" id="name" required class="mt-1 py-3 px-4 block w-full shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] border-gray-300 rounded-md">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 py-3 px-4 block w-full shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] border-gray-300 rounded-md">
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Тема</label>
                        <input type="text" name="subject" id="subject" required class="mt-1 py-3 px-4 block w-full shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] border-gray-300 rounded-md">
                        @error('subject')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Сообщение</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 py-3 px-4 block w-full shadow-sm focus:ring-[#1E90FF] focus:border-[#1E90FF] border-gray-300 rounded-md"></textarea>
                        @error('message')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-[#1E90FF] hover:bg-[#1873CC] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1E90FF] transition">
                            Отправить сообщение
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 