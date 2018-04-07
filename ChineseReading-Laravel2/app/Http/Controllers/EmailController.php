<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller{

    public function sendemail(Request $request){

        return response()->json([
            'message' => 'successfully sent email.'
        ],201);
    }
}