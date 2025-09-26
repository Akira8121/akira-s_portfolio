@extends('layouts.app')

@section('title', 'PROFILE')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-4xl font-bold text-blue-700 mb-10 text-center">プロフィール</h1>
    <!-- プロフィール -->
    <div class="mb-10">
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-4 md:space-y-0 md:space-x-6">
            <img src="{{ asset('images/profile.JPG') }}" alt="プロフィール写真"
                class="w-32 h-32 rounded-full object-cover border">
            <div>
                <p class="text-lg font-semibold text-center md:text-left">三角晶　<span class="text-sm">Akira Misumi</span></p>
                <p class="text-gray-600 mt-2 text-center md:text-left">
                    1999年1月19日生まれ、福岡県在住。<br>九州造形短期大学部を卒業後、<br class="block md:hidden">広告デザイン会社に4年程就職。<br>
                    前職では、社長の好意によりスクールに通い、コードを使用したWEBサイト制作のスキルを習得。<br>自社(就職先)を含む3社のWEBサイトを制作。
                </p>
            </div>
        </div>
    </div>

    <!-- 使用スキル -->
    <div>
        <h2 class="text-2xl font-bold mb-4">SKILLS</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_illustrator.png') }}" alt="Illustrator" class="w-8 h-8">
                    <span class="font-bold">Illustrator</span>
                </div>
                <p class="text-sm text-gray-600">
                    チラシ・名刺・バナーなどの作成が得意です。<br>デザインの細部までこだわり、クライアントのイメージを壊さず要望に応える作品を提供します。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_photoshop.png') }}" alt="Photoshop" class="w-8 h-8">
                    <span class="font-bold">Photoshop</span>
                </div>
                <p class="text-sm text-gray-600">
                    基本的な操作はもちろん、ショートカットキーも使いこなせます。<br>主に、宣材写真等の編集や、背景透過の切り抜き画像作成で使用します。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_indesign.png') }}" alt="InDesign" class="w-8 h-8">
                    <span class="font-bold">InDesign</span>
                </div>
                <p class="text-sm text-gray-600">
                    短期大学の講義にて使用したことがあるため、基本的な操作はもちろん、ショートカットキーも使いこなせます。<br>講義では、雑誌の表紙の制作や紙のポートフォリオ冊子の制作時に使用しました。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_lightroom.png') }}" alt="Lightroom" class="w-8 h-8">
                    <span class="font-bold">Lightroom</span>
                </div>
                <p class="text-sm text-gray-600">
                    短期大学の講義にて使用したことがあるため、基本的な操作はもちろん、ショートカットキーも使いこなせます。<br>講義では、撮影した写真のROWデータの編集時に使用しました。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_premiere.png') }}" alt="Premiere Pro" class="w-8 h-8">
                    <span class="font-bold">Premiere Pro</span>
                </div>
                <p class="text-sm text-gray-600">
                    短期大学の講義にて使用したことがあるため、基本的な操作はもちろん、ショートカットキーも使いこなせます。<br>講義では、撮影した映像データの編集時に使用しました。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_dreamweaver.png') }}" alt="Dreamweaver" class="w-8 h-8">
                    <span class="font-bold">Dreamweaver</span>
                </div>
                <p class="text-sm text-gray-600">
                    前職でVisual Studio Codeを導入前に使用していました。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_html.png') }}" alt="HTML" class="w-8 h-8">
                    <img src="{{ asset('images/skill_css.png') }}" alt="CSS" class="w-8 h-8">
                    <span class="font-bold">HTML / CSS</span>
                </div>
                <p class="text-sm text-gray-600">
                    教科書や講師からの課題、グループ制作、自主制作通じて、前職で3社のWEBサイトを制作しました。<br>レスポンシブデザインのコツもつかんでおり、モバイルフレンドリーなサイトを作成することができます。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_js.png') }}" alt="JavaScript" class="w-8 h-8">
                    <span class="font-bold">JavaScript</span>
                </div>
                <p class="text-sm text-gray-600">
                    教科書を一冊終え、基礎を理解しています。<br>現在は学習を継続中で、より実践的なスキルの習得を目指しています。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_wordpress.png') }}" alt="WordPress" class="w-8 h-8">
                    <span class="font-bold">WordPress</span>
                </div>
                <p class="text-sm text-gray-600">
                    教科書を一冊終え、基礎を理解しています。<br>お客様からの依頼により、Wordpressを使用したWEBサイトを制作するなど、実践にも応用できます。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_php.png') }}" alt="PHP" class="w-8 h-8">
                    <span class="font-bold">PHP</span>
                </div>
                <p class="text-sm text-gray-600">
                    教科書を一冊終え、基礎を理解しています。<br>現在は学習を継続中で、より実践的なスキルの習得を目指しています。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_laravel.png') }}" alt="Laravel" class="w-8 h-8">
                    <span class="font-bold">Laravel</span>
                </div>
                <p class="text-sm text-gray-600">
                    教科書を一冊終え、基礎を理解しています。<br>現在は学習を継続中で、より実践的なスキルの習得を目指しています。<br>
                    このポートフォリオサイトもLaravel10で制作しております。<br>
                    最新のLaravelのバージョンも学習予定。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_vuejs.png') }}" alt="Vue.js" class="w-8 h-8">
                    <span class="font-bold">Vue.js</span>
                </div>
                <p class="text-sm text-gray-600">現在学習中で、より実践的なスキルの習得を目指しています。</p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_git.png') }}" alt="Git" class="w-8 h-8">
                    <span class="font-bold">Git / GitHub</span>
                </div>
                <p class="text-sm text-gray-600">
                    ポートフォリオ等のサイトのコードのアップロードに使用。<br>
                    求職者訓練校のグループ制作時にも使用し、チーム全体の制作に活用しました。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_vscode.png') }}" alt="Visual Studio Code" class="w-8 h-8">
                    <span class="font-bold">Visual Studio Code</span>
                </div>
                <p class="text-sm text-gray-600">
                    前職・求職者訓練校・自宅での制作時に使用。<br>設定や必要なプラグインのダウンロードなど可能。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_FileZilla.png') }}" alt="File Zilla" class="w-8 h-8">
                    <span class="font-bold">File Zilla</span>
                </div>
                <p class="text-sm text-gray-600">
                    前職にて、サーバーへのサイトアップロード時に使用。<br>FTPに関する知識を習得しています。
                </p>
            </div>
            <div class="bg-white shadow p-4 rounded-lg flex flex-col space-y-2">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/skill_teraterm.png') }}" alt="File Zilla" class="w-8 h-8">
                    <span class="font-bold">Tera Term5</span>
                </div>
                <p class="text-sm text-gray-600">
                    サーバーへのサイトアップロード時に使用。<br>コマンド入力など、SSH接続等に関する知識を習得しています。
                </p>
            </div>
        </div>
    </div>
</div>
@endsection