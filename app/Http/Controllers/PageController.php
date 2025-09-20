<?php

namespace App\Http\Controllers;

use App\Models\Work;

class PageController extends Controller
{
    private $designWorks = [
        1 => ['title' => 'Design 1', 'description' => '説明1', 'image' => 'design1.jpg'],
        2 => ['title' => 'Design 2', 'description' => '説明2', 'image' => 'design2.jpg'],
    ];

    private $webWorks = [
        1 => ['title' => 'Web Site 1', 'description' => '説明A', 'url' => 'https://example.com'],
        2 => ['title' => 'Web Site 2', 'description' => '説明B', 'url' => 'https://example2.com'],
    ];

    public function home()
    {
        return view('pages.home');
    }

    public function profile()
    {
        $skills = ['PHP', 'Laravel', 'JavaScript', 'Vue.js', 'Photoshop'];
        return view('pages.profile', compact('skills'));
    }

    public function works()
    {
        $designWorks = Work::where('type', 'design')->get();
        $webWorks = Work::where('type', 'web')->get();

        return view('pages.works', compact('designWorks', 'webWorks'));
    }

    public function designDetail($id)
    {
        $work = Work::where('type', 'design')->findOrFail($id);
        return view('works.design-detail', compact('work'));
    }

    public function webDetail($id)
    {
        $work = Work::where('type', 'web')->findOrFail($id);
        return view('works.web-detail', compact('work'));
    }
}
