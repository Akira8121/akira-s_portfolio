<p>{{ $data['name'] }} 様</p>

<p>この度はお問い合わせいただきありがとうございます。<br>
以下の内容で受け付けました。</p>

<p><strong>件名：</strong> {{ $data['subject'] }}</p>
<p><strong>メッセージ：</strong><br>{{ nl2br(e($data['message'])) }}</p>

<p>担当者より追ってご連絡いたしますので、今しばらくお待ちください。</p>
