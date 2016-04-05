@extends('layouts.main')

@section('content')
    <form action="/convert" method="post">
        Zamień: {{ Form::text('kwota') }}
        {{ Form::select('walutaBaza', $curr, null,["onchange"=>"validate()",  "id"=>"walutaBaza"] ) }}
        na:
        {{ Form::select('walutaDocelowa',$curr,null,["onchange"=>"validate()", "id"=>"walutaDocelowa" ] )}}

        {{ Form::submit('Konwertuj') }}

        {{ csrf_field() }}
    </form>

    @if(session('result'))
        {{ old('kwota') . old('walutaBaza') }} to {{session('result') . old('walutaDocelowa')}}
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
        //document.getElementById("walutaDocelowa").selectedIndex  = "-1";
        //document.getElementById("walutaBaza").selectedIndex  = "-1";
       function validate(){
        var walBaza = document.getElementById("walutaBaza").value; 
        var walDoc =  document.getElementById("walutaDocelowa").value;
       if( walBaza == walDoc ){
         alert ("Wybrałeś idntyczne waluty "  + walBaza );
       }
        
       }
    </script>
@endsection


