@extends('layouts.main')

@section('content')
    <form action="/convert" method="post">
        Zamień: {{ Form::text('kwota') }}
        {{
            Form::select('walutaBaza', $Curr)
        }}
        na:
        {{
            Form::select('walutaDocelowa',$Curr)
        }}

        {{ Form::submit('Konwertuj') }}
        {{--<input--}}
                {{--id="button"--}}
                {{--type="submit"--}}
                {{--value="Konwertuj"--}}
                {{--class="button"--}}
        {{--/>--}}

    {{ csrf_field() }}
    </form>
    
    @if(isset($out))
        Wynik konwersji do USD: {{$out}}
    @endif

    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
