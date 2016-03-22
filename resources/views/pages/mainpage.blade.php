@extends('layouts.main')

@section('content')
    <form action="/convert" method="post">
        Zamień: {{ Form::text('kwota') }}
        {{
            Form::select('walutaBaza', $curr)
        }}
        na:
        {{
            Form::select('walutaDocelowa',$curr)
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

@section('javascript')

    <script type="text/javascript">
        alert('test java');
    </script>

@endsection
