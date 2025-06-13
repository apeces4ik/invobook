@extends('layouts.app')

@section('title', 'Создать заявку — IvASoft')

@section('content')
<div class="max-w-2xl mx-auto py-8">
    <div class="bg-white shadow rounded-lg">
        <div class="px-6 py-4 border-b border-gray-200 flex items-center justify-between">
            <h4 class="text-lg font-semibold">Создание новой заявки</h4>
            <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm text-gray-500 hover:text-blue-600 transition">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                Назад
            </a>
        </div>
        <div class="px-6 py-6">
            <form action="{{ route('tickets.store') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Тема заявки</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm @error('subject') border-red-500 @enderror">
                    @error('subject')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Описание проблемы</label>
                    <textarea id="description" name="description" rows="5" required
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm resize-y @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="priority" class="block text-sm font-medium text-gray-700 mb-1">Приоритет</label>
                    <select id="priority" name="priority" required
                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 text-sm @error('priority') border-red-500 @enderror">
                        <option value="">Выберите приоритет</option>
                        <option value="low" {{ old('priority') === 'low' ? 'selected' : '' }}>Низкий</option>
                        <option value="medium" {{ old('priority') === 'medium' ? 'selected' : '' }}>Средний</option>
                        <option value="high" {{ old('priority') === 'high' ? 'selected' : '' }}>Высокий</option>
                    </select>
                    @error('priority')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                        Отправить заявку
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 