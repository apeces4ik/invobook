@extends('layouts.app')

@section('title', 'Регистрация — IvASoft')

@section('content')
<div class="flex justify-center items-center min-h-[60vh] bg-white">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Создать аккаунт</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Имя</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="mt-1 block w-full rounded border-gray-300 focus:border-[#1E90FF] focus:ring-[#1E90FF]">
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full rounded border-gray-300 focus:border-[#1E90FF] focus:ring-[#1E90FF]">
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Пароль</label>
                <input id="password" type="password" name="password" required class="mt-1 block w-full rounded border-gray-300 focus:border-[#1E90FF] focus:ring-[#1E90FF]">
                @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Подтвердите пароль</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full rounded border-gray-300 focus:border-[#1E90FF] focus:ring-[#1E90FF]">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-[#1E90FF] hover:bg-[#1873CC] text-white font-semibold rounded transition">Зарегистрироваться</button>
        </form>
        <div class="mt-4 text-center">
            <span class="text-gray-600">Уже есть аккаунт?</span>
            <a href="{{ route('login') }}" class="text-[#1E90FF] hover:underline">Войти</a>
        </div>
    </div>
</div>
@endsection 