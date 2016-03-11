@extends('layouts.main')

@section('content')
    <form action="/convert" method="post">
        <input name="value" type="text">
        <input
                id="button"
                type="submit"
                value="Convert to pln"
                class="button"
        />
    {{ csrf_field() }}
    </form>
    @if(isset($out))
        Wynik konwersji do USD: {{$out}}
    @endif
@endsection
