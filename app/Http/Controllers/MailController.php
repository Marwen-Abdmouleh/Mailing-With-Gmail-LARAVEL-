<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function sendMail(){
        $details=[
            'tittle'=>'Objet: Candidature – Chef de projets',
            'body'=>' Votre annonce pour un poste de chef de projets a retenu toute mon attention.'
        ];
        Mail::to('')->send(new TestMail($details));
        return 'Email envoyé';
    }
}
