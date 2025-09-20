<p>以下の内容でお問い合わせがありました：</p>

<p><strong>お名前：</strong> {{ $data['name'] }}</p>
<p><strong>メール：</strong> {{ $data['email'] }}</p>
<p><strong>電話番号：</strong> {{ $data['phone'] }}</p>
<p><strong>性別：</strong> {{ $data['gender'] }}</p>
<p><strong>件名：</strong> {{ $data['subject'] }}</p>
<p><strong>メッセージ：</strong><br>{{ nl2br(e($data['message'])) }}</p>
