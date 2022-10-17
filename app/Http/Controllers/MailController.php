<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\MailNotify;


class MailController extends Controller
{
//    public function index()
//    { //diri himuon ang data nga isend
//         $data = [
//             'subject'=>'Cebu City Registration System',
//             'body' => 'Our valued Cebuano, we will be processing your request as sooon as possible. Thank you!'

//         ];
//         try
//         {
//             Mail::to('julsestorco031602@gmail.com')->send(new MailNotify($data));
//             return response()->json(['Check your email']);
    
//         } catch(Exception $th)
//         {
//             return response()->json(['Something went wrong']);
//         }
    
//     }
}

