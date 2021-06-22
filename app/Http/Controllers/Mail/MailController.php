<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Services\MailService;
use Illuminate\Http\Request;

class MailController extends Controller
{
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function sendMail() {

        $email = "conexioneducativa4@gmail.com";
        $title = "Prueba Mail";
        $body = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nulla harum quo animi ipsam iste autem est, quasi facilis ullam deserunt sed eaque, assumenda voluptates. Dolorum cum autem ipsum repudiandae!";

        $this->mailService->sendMail($email, $title, $body);
    }
}
