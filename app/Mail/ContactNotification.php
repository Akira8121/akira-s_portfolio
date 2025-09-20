<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $isConfirmation;

    public function __construct(array $data, bool $isConfirmation = false)
    {
        $this->data = $data;
        $this->isConfirmation = $isConfirmation;
    }

    public function build()
    {
        if ($this->isConfirmation) {
            return $this->subject('【自動返信】お問い合わせありがとうございます')
                        ->view('emails.contact-confirmation')
                        ->with('data', $this->data);
        }

        return $this->subject('【お問い合わせ通知】' . $this->data['name'] . '様より')
                    ->view('emails.contact-notification')
                    ->with('data', $this->data);
    }
}
