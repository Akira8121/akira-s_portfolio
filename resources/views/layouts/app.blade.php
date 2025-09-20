<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title') | Portfolio</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;500;700;800&display=swap"
    rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-['M_PLUS_Rounded_1c'] bg-gray-50 text-gray-800">
  {{-- 共通ヘッダー --}}
  @include('layouts.header')

  <main class="min-h-screen container mx-auto px-6 py-10 pt-[64px] md:pt-[120px]">
    @yield('content')

    <!-- トップへ戻るボタン -->
    <button
      x-data="{ show: false }"
      x-init="window.addEventListener('scroll', () => show = window.scrollY > 200)"
      x-show="show"
      @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
      class="fixed bottom-6 right-6 z-40 w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 text-white text-lg font-bold shadow-lg hover:scale-105 transition"
      x-transition>
      ↑
    </button>
  </main>

  {{-- 共通フッター --}}
  @include('layouts.footer')
</body>

</html>