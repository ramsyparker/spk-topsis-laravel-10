<?php
namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends VerifyEmailBase
{
    protected function verificationUrl($notifiable)
    {
        $signedUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
        );

        return $signedUrl . '?redirect=dashboard';
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Verifikasi Alamat Email')
            ->line('Silakan klik tombol di bawah ini untuk memverifikasi alamat email Anda.')
            ->action('Verifikasi Alamat Email', $this->verificationUrl($notifiable))
            ->line('Jika Anda tidak membuat akun, tidak ada tindakan lebih lanjut yang diperlukan.');
    }
}