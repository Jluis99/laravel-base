<?php

namespace App\Services\Implementations;

use App\Mail\Mail as MailClass;
use App\Services\MailService;
use App\Util\Str;
use Illuminate\Support\Facades\Mail;

class MailServiceImpl implements MailService
{

    /**
     * Send Mail
     *
     * @param string $email
     * @param string $title
     * @param string $body
     * @return bool
     */
    public function sendMail($email, $title, $body)
    {
        try {

            $email = Str::lower($email);

            $details = [
                'title' => $title,
                'body' => $body,
            ];

            Mail::to($email)->send(new MailClass($details));

            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
