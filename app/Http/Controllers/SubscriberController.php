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

    public function subscribe(Request $request)
    {
        if($request->locale == 'nl')
        {
            $request->validate([
                'question_1'=>'required',
                'question_2'=>'required',
                'question_3'=>'required',
                'question_4'=>'required',
                'question_5'=>'required',
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'telephone'=>'required',
                'company'=>'required',
                'tiebreaker_question'=>'required',
            ],
                [
                    'question_1.required'=>'Deze vraag is verplicht in te vullen.',
                    'question_2.required'=>'Deze vraag is verplicht in te vullen.',
                    'question_3.required'=>'Deze vraag is verplicht in te vullen.',
                    'question_4.required'=>'Deze vraag is verplicht in te vullen.',
                    'question_5.required'=>'Deze vraag is verplicht in te vullen.',
                    'first_name.required'=>'Voornaam is verplicht in te vullen.',
                    'last_name.required'=>'Naam is verplicht in te vullen.',
                    'email.required'=>'E-mail is verplicht in te vullen.',
                    'telephone.required'=>'Telefoon of GSM is verplicht in te vullen.',
                    'company.required'=>'Bedrijf is verplicht in te vullen.',
                    'tiebreaker_question.required'=>'Schiftingsvraag is verplicht in te vullen.',
                ]

            );
        }
        else
        {
            $request->validate([
                'question_1'=>'required',
                'question_2'=>'required',
                'question_3'=>'required',
                'question_4'=>'required',
                'question_5'=>'required',
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'telephone'=>'required',
                'company'=>'required',
                'tiebreaker_question'=>'required',
            ],
                [
                    'question_1.required'=>'Champ obligatoire.',
                    'question_2.required'=>'Champ obligatoire.',
                    'question_3.required'=>'Champ obligatoire.',
                    'question_4.required'=>'Champ obligatoire.',
                    'question_5.required'=>'Champ obligatoire.',
                    'first_name.required'=>'Le prénom est obligatoire.',
                    'last_name.required'=>'Le nom est obligatoire.',
                    'email.required'=>"L' e-mail est obligatoire.",
                    'telephone.required'=>'Téléphone ou GSM obligatoire à renseigner.',
                    'company.required'=>"L'entreprise doit remplir.",
                    'tiebreaker_question.required'=>'La question de départage doit être complétée.',
                ]
            );
        }

        $data = [
            'language' => $request->locale,
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
        $lang = $request->locale;

        return view('includes.thankyou', compact('lang'));
    }
}
