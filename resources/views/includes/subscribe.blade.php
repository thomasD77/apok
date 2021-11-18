
<form class="form__content" action="{{ route('subscribe', app()->getLocale()) }}" method="POST">
    @csrf
    <div class="form__wrap">
        <div class="col-12 d-flex flex-column">
            <h3 class="label__question mt-0">{{__('Vraag 1: Hoe ervaar jij APOK?')}}<span class="ms-1">{{__('(kort omschrijven)*')}}</span></h3>
            <textarea class="form__textarea" name="question_1">{{old('question_1')}}</textarea>
            @error('question_1')
            <p class="text-danger mt-2"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-12 d-flex flex-column">
            <h3 class="label__question">{{__('Vraag 2: Wat kan APOK voor jou als klant nog verbeteren?')}}<span class="ms-1">{{__('(kort omschrijven)*')}}</span></h3>
            <textarea class="form__textarea" name="question_2">{{old('question_2')}}</textarea>
            @error('question_2')
            <p class="text-danger mt-2"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-12 d-flex flex-column">
            <h3 class="label__question">{{__('Vraag 3: Hoe bevalt het online shoppen bij APOK?')}}<span class="ms-1">{{__('(kort omschrijven)*')}}</span></h3>
            <textarea class="form__textarea" name="question_3">{{old('question_3')}}</textarea>
            @error('question_3')
            <p class="text-danger mt-2"> {{ $message }}</p>
            @enderror
        </div>
        <div class="col-12 d-flex flex-column">
            <h3 class="label__question">{{__('Vraag 4: Ken je of heb je al gehoord van de APOK Exclusives?*')}}</h3>
            <div class="d-flex label__checkbox">
                <label class="me-5 d-flex align-items-center"><input class="me-3 input__checkbox" type="checkbox" name="question_4" value="1" {{ old('question_4') == 1 ? 'checked' : '' }}>{{__('Ja')}}</label>
                <label class="d-flex align-items-center"><input class="me-3 input__checkbox" type="checkbox" name="question_4" value="false" {{ old('question_4') == 'false' ? 'checked' : '' }}>{{{__('Neen')}}}</label>
            </div>
            @error('question_4')
            <p class="text-danger mt-2"> {{ $message }}</p>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-4 offset-md-4">
                <hr class="hr__style">
            </div>
        </div>

        <h3 class="label__question mb-0">{{__('Jouw gegevens:')}}</h3>

        <div class="row">
            <div class="col-12 col-lg-6 custom__margin">
                <h4>{{__('Voornaam *')}}</h4>
                <input class="input__style" type="text" name="first_name" value="{{ old('first_name') }}">
                @error('first_name')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-lg-6 custom__margin">
                <h4>{{__('Naam *')}}</h4>
                <input class="input__style" type="text" name="last_name" value="{{ old('last_name') }}">
                @error('last_name')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="col-12 custom__margin">
                <h4>{{__('E-mailadres *')}}</h4>
                <input class="input__style" type="text" name="email" value="{{ old('email') }}">
                @error('email')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <div class="col-12 col-lg-6 custom__margin">
                <h4>{{__('Telefoon of GSM')}}</h4>
                <input class="input__style " type="number" name="telephone" value="{{ old('telephone') }}">
                @error('telephone')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>
            <div class="col-12 col-lg-6 custom__margin">
                <h4>{{__('Waar werk je of wat is je firmanaam? *')}}</h4>
                <input class="input__style" type="text" name="company" value="{{ old('company') }}">
                @error('company')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <h4 class="custom__margin">{{__('Wat was het aantal gevangen myAPOK leaflets in de wervelwindcabine?*')}}</h4>
            <div class="col-12 col-lg-6">
                <input class="input__style" type="number" name="question_5" value="{{ old('question_5') }}">
                @error('question_5')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <h4 class="custom__margin mb-1">{{__('Schiftingsvraag voor de grote prijzen. *')}}</h4>
            <h4>{{__('Hoeveel geregistreerde personen zullen er mee doen in de wervelwindcabine?')}}</h4>
            <div class="col-12 col-lg-6">
                <input class="input__style" type="number" name="tiebreaker_question" value="{{ old('tiebreaker_question') }}">
                @error('tiebreaker_question')
                <p class="text-danger mt-2"> {{ $message }}</p>
                @enderror
            </div>

            <input type="hidden" name="locale" value="{{app()->getLocale()}}">

            <h4 class="custom__margin">{{__('Mogen we je inschrijven op onze nieuwsbrief ivm opleidingen, producten, nieuws en promoties?')}}</h4>
            <label class="d-flex align-items-center"><input class="me-3 input__checkbox" type="checkbox" name="approval" value="1" {{ old('approval') == 1 ? 'checked' : '' }}>{{__('Ja natuurlijk!')}}</label>
        </div>
        <div class="d-flex justify-content-center justify-content-lg-end buttons">
            <a class="btn__restart" href="{{ route('home', app()->getLocale()) }}">{{__('wis en herstart')}}</a>
           <button class="btn__register" type="submit">{{__('registreren')}}</button>
        </div>
    </div>
</form>

