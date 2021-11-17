<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
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
        ];
    }

    public function messages(){
        if(app()->getLocale() == 'nl'){
            return[
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
            ];
        }
        else
        {
            return[
                'question_1.required'=>'Cette question est obligatoire à remplir.',
                'question_2.required'=>'Cette question est obligatoire à remplir.',
                'question_3.required'=>'Cette question est obligatoire à remplir.',
                'question_4.required'=>'Cette question est obligatoire à remplir.',
                'question_5.required'=>'Cette question est obligatoire à remplir.',
                'first_name.required'=>'Le prénom est obligatoire.',
                'last_name.required'=>'Le nom est obligatoire.',
                'email.required'=>"L' e-mail est obligatoire.",
                'telephone.required'=>'Téléphone ou GSM obligatoire à renseigner.',
                'company.required'=>"L'entreprise doit remplir.",
                'tiebreaker_question.required'=>'La question de départage doit être complétée.',
            ];
        }

    }
}
