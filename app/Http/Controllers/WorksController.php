<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorksController extends Controller
{
    private function loadWorks()
    {
        $json = Storage::get('data/works.json');
        return json_decode($json, true);
    }

    // 一覧
    public function index(Request $request)
    {
        $works = $this->loadWorks();

        $tag = $request->query('tag');
        $category = $request->query('category');

        // タグによる絞り込み
        if ($tag) {
            $works = array_filter($works, fn($w) => in_array($tag, $w['tags']));
        }
        // カテゴリによる絞り込み
        if ($category) {
            $works = array_filter($works, fn($w) => $w['category'] === $category);
        }

        // タグ一覧を作成（重複を除く）
        $tags = collect($this->loadWorks()) // 全作品を再取得
            ->pluck('tags')                   // 各作品のtags配列を取得
            ->flatten()                       // ネストされた配列を平坦化
            ->unique()                        // 重複を削除
            ->values()                        // インデックスを振り直す
            ->all();

        return view('works.index', [
            'works' => $works,
            'tags' => $tags,         // ← ここを追加
            'selectedTag' => $tag,
            'selectedCategory' => $category,
        ]);
    }


    // 詳細
    public function show($id)
    {
        $works = $this->loadWorks();
        $work = collect($works)->firstWhere('id', (int)$id);

        if (!$work) {
            abort(404);
        }

        return view('works.show', compact('work'));
    }
}
