@extends('layouts.app')

@section('title', 'WORKS')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-4xl font-bold text-blue-700 mb-8 text-center">制作実績一覧</h1>

    <!-- タグ一覧 -->
    <div class="flex flex-wrap justify-center gap-2 mb-6">
        @foreach($tags ?? [] as $tag)
            <a href="{{ route('works.index', ['tag' => $tag]) }}"
               class="px-4 py-2 rounded-full cursor-pointer transition 
                      bg-gradient-to-r from-blue-400 to-blue-600 
                      text-white shadow-md hover:shadow-lg 
                      hover:scale-105 glossy-btn">
                {{ $tag }}
            </a>
        @endforeach

        @if(!empty($selectedTag))
            <a href="{{ route('works.index') }}"
               class="px-4 py-2 rounded-full cursor-pointer transition 
                      bg-gray-300 text-gray-800 shadow-md hover:shadow-lg 
                      hover:scale-105">
                タグ解除: {{ $selectedTag }}
            </a>
        @endif
    </div>

    <!-- 一覧表示 -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($works ?? [] as $work)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            {{-- hover 効果は div にもつけています --}}
            <x-safe-image :src="$work['image'] ?? null" 
                          :alt="$work['title'] ?? '作品画像'" 
                          class="w-full h-48 object-cover rounded-t-2xl shadow-md transition duration-300 transform" />

            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800">{{ $work['title'] ?? '無題' }}</h2>
                <p class="text-gray-600 whitespace-pre-line leading-relaxed mt-2">{{ $work['description'] ?? '' }}</p>
                <div class="mt-4">
                    <a href="{{ route('works.show', $work['id'] ?? '#') }}"
                       class="px-4 py-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700 text-white shadow-md hover:shadow-xl transition duration-300 glossy-btn">
                        詳細はこちら
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
