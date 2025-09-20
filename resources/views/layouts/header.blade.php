<header class="fixed w-full top-0 left-0 z-50 flex justify-between items-center bg-white shadow px-4 md:px-8 min-h-16">
    <!-- ロゴ -->
    <a href="{{ route('home') }}" class="flex items-center">
        <img src="{{ asset('images/logo.svg') }}" alt="My Portfolio" class="h-8 sm:h-24 w-auto">
    </a>

    <!-- ハンバーガーメニュー -->
    <button class="hamburger block md:hidden" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- PCメニュー -->
    <nav class="hidden md:flex space-x-6 text-black font-medium">
        <a href="{{ route('home') }}" class="hover:text-blue-500" @if(Request::is('/')) style="color:#3b82f6" @endif>Home</a>
        <a href="{{ route('profile') }}" class="hover:text-blue-500" @if(Request::is('profile')) style="color:#3b82f6" @endif>Profile</a>
        <a href="{{ route('works.index') }}" class="hover:text-blue-500" @if(Request::is('works')) style="color:#3b82f6" @endif>Works</a>
        <a href="{{ route('contact') }}" class="hover:text-blue-500" @if(Request::is('contact')) style="color:#3b82f6" @endif>Contact</a>
    </nav>
</header>

<!-- モバイルメニュー -->
<nav id="mobile-menu" class="fixed top-16 left-0 w-full bg-white shadow-md transform -translate-y-full opacity-0 pointer-events-none transition-all duration-300 z-40 flex flex-col items-center space-y-4 py-4 text-black font-medium">
    <a href="{{ route('home') }}" class="hover:text-blue-500" @if(Request::is('/')) style="color:#3b82f6" @endif>Home</a>
    <a href="{{ route('profile') }}" class="hover:text-blue-500" @if(Request::is('profile')) style="color:#3b82f6" @endif>Profile</a>
    <a href="{{ route('works.index') }}" class="hover:text-blue-500" @if(Request::is('works')) style="color:#3b82f6" @endif>Works</a>
    <a href="{{ route('contact') }}" class="hover:text-blue-500" @if(Request::is('contact')) style="color:#3b82f6" @endif>Contact</a>
</nav>