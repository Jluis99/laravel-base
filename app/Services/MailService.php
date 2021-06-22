<?php

namespace App\Services;

interface MailService {

    /**
     * Send Mail
     *
     * @param string $email
     * @param string $title
     * @param string $body
     * @return bool
     */
    public function sendMail($email, $title, $body);
}
