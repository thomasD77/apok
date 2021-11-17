<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Models\Prospect;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriberController extends Controller
{
    //

    public function subscribe(SubscriberRequest $request)
    {

        if ($_POST['g-recaptcha-response'] != "") {
            $secret = '6LcO3TodAAAAAPJtkSEBIjMX9nWezAVgjKVcZcf5';

            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);

            if ($responseData->success) {

                $data = [
                    'question_1' => $request->question_1,
                    'question_2' => $request->question_2,
                    'question_3' => $request->question_3,
                    'question_4' => $request->question_4,
                    'question_5' => $request->question_5,
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                    'company' => $request->company,
                    'tiebreaker_question' => $request->tiebreaker_question,
                    'approval' => $request->approval,
                ];

                Subscriber::create($data);
            }
        }
        $lang = $request->locale;

        return view('includes.thankyou', compact('lang'));
    }

    public function thankyou()
    {
        return view('includes.thankyou');
    }
}
