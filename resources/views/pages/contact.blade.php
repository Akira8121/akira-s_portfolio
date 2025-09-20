@extends('layouts.app')

@section('title', 'CONTACT')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-center text-4xl font-bold text-blue-700 mb-6">お問い合わせ</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label class="block">名前</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded p-2">
            @error('name') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">メールアドレス</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded p-2">
            @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">電話番号</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border rounded p-2" placeholder="例: 09012345678 または 090-1234-5678">
            @error('phone') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">性別</label>
            <div class="flex gap-4">
                <label><input type="radio" name="gender" value="male" {{ old('gender')=='male' ? 'checked' : '' }}> 男性</label>
                <label><input type="radio" name="gender" value="female" {{ old('gender')=='female' ? 'checked' : '' }}> 女性</label>
                <label><input type="radio" name="gender" value="other" {{ old('gender')=='other' ? 'checked' : '' }}> その他</label>
            </div>
            @error('gender') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">お問い合わせ内容（件名）</label>
            <select name="subject" class="w-full border rounded p-2">
                <option value="">選択してください</option>
                <option value="question" {{ old('subject')=='question' ? 'selected' : '' }}>質問</option>
                <option value="request" {{ old('subject')=='request' ? 'selected' : '' }}>依頼</option>
                <option value="other" {{ old('subject')=='other' ? 'selected' : '' }}>その他</option>
            </select>
            @error('subject') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block">本文</label>
            <textarea name="message" rows="6" class="w-full border rounded p-2">{{ old('message') }}</textarea>
            @error('message') <p class="text-red-500">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded">送信</button>
    </form>
</div>
@endsection
