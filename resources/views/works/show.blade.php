@extends('layouts.app')

@section('title', 'WORKS')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">{{ $work['title'] ?? '無題' }}</h1>

    {{-- メイン画像 --}}
    <x-safe-image :src="$work['image'] ?? null"
        :alt="$work['title'] ?? '作品画像'"
        class="rounded-2xl shadow-lg mb-6 w-full" />

    {{-- 追加画像 --}}
    @if(!empty($work['extra_images']))
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 my-8">
        @foreach ($work['extra_images'] as $img)
        <x-safe-image :src="$img" alt="追加画像" class="rounded-lg shadow-md" />
        @endforeach
    </div>
    @endif

    {{-- 小見出しごとの内容 --}}
    @if(!empty($work['sections']))
    <div class="space-y-8">
        @foreach($work['sections'] as $sectionTitle => $sectionContent)
        <div>
            <h2 class="text-xl font-semibold text-blue-700 mb-2">{{ $sectionTitle }}</h2>

            @if($sectionTitle === "サイトはこちら")
            {{-- サイトリンクボタン --}}
            <a href="{{ $sectionContent }}"
                target="_blank"
                class="inline-block px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 
                                  text-white font-semibold rounded-full shadow-lg hover:scale-105 
                                  hover:shadow-xl transform transition duration-300">
                view more...
            </a>
            @else
            {{-- 改行ありテキスト --}}
            <p class="text-gray-700 whitespace-pre-line leading-relaxed">
                {{ $sectionContent }}
            </p>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    {{-- その他制作物 --}}
    @if(!empty($work['other_works']))
    <div class="my-10">
        <h2 class="text-2xl font-bold text-blue-800 mb-4">その他制作物</h2>
        <div class="grid md:grid-cols-2 gap-6">
            @foreach ($work['other_works'] as $other)
            <div class="bg-white rounded-xl shadow-lg p-4">
                <x-safe-image :src="$other['image'] ?? null"
                    :alt="$other['title'] ?? 'その他制作物'"
                    class="rounded-lg mb-3" />
                <h3 class="text-lg font-semibold">{{ $other['title'] ?? '無題' }}</h3>
                <p class="text-gray-600 whitespace-pre-line">{{ $other['description'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    {{-- 戻るボタン --}}
    <div class="mt-8">
        <a href="{{ route('works.index') }}"
            class="bg-blue-600 text-white px-6 py-2 rounded-full shadow hover:bg-blue-700 transition">
            一覧に戻る
        </a>
    </div>
</div>
@endsection