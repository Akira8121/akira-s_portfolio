<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:100',
            'email'     => 'required|email',
            'phone'     => ['nullable', 'regex:/^\d{10,11}$|^\d{2,4}-\d{2,4}-\d{3,4}$/'], // ハイフン有無OK
            'gender'    => 'required|in:male,female,other',
            'subject'   => 'required|in:question,request,other',
            'message'   => 'required|string|max:2000',
        ]);

        // 日本語変換用のマッピング
        $genderMap = [
            'male'   => '男性',
            'female' => '女性',
            'other'  => 'その他',
        ];

        $subjectMap = [
            'question' => '質問',
            'request'  => '依頼',
            'other'    => 'その他',
        ];

        // 日本語に変換（存在しない値ならそのまま出す）
        $gender  = $genderMap[$validated['gender']];
        $subject = $subjectMap[$validated['subject']];

        // 管理者宛に送信
        Mail::raw(
            "【お問い合わせ内容】\n\n" .
                "以下の内容でお問い合わせがありました。\n\n" .
                "名前: {$validated['name']}\n" .
                "メール: {$validated['email']}\n" .
                "電話番号: {$validated['phone']}\n" .
                "性別: {$gender}\n" .
                "件名: {$subject}\n" .
                "本文:\n{$validated['message']}\n\n" .
                "3日以内に{$validated['name']}様宛にご返信をしてください。",
            function ($message) use ($validated) {
                $message->to(env('ADMIN_MAIL'))
                    ->subject('ポートフォリオサイトからのお問い合わせ');
            }
        );

        // 自動返信（ユーザー宛）
        Mail::raw(
            "{$validated['name']} 様\n\n" .
                "この度は、お問い合わせ頂きありがとうございます。\n\n" .
                "下記の内容で受け付けました。\n" .
                "名前: {$validated['name']}\n" .
                "メール: {$validated['email']}\n" .
                "電話番号: {$validated['phone']}\n" .
                "性別: {$gender}\n" .
                "件名: {$subject}\n" .
                "本文:\n{$validated['message']}\n\n" .
                "内容を確認のうえ、3日以内に折り返しご連絡いたします。\n\n" .
                "3日以内にご連絡がなかった場合は、もう一度フォームにてお送りいただくか、\n" .
                "お電話にてご連絡お願い致します。\n\n\n" .
                "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n" .
                "ポートフォリオサイト\n" .
                "三角　晶\n" .
                "mail：akimaru2146@gmail.com\n" .
                "Tel：070-5491-1190\n" .
                "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝",
            function ($message) use ($validated) {
                $message->to($validated['email'])
                    ->subject('お問い合わせありがとうございます');
            }
        );

        return redirect()->route('contact')->with('success', '送信が完了しました！');
    }
}
