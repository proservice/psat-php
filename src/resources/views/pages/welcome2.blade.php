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
    </form>
    @if(isset($out))
        Wynik konwersji do USD: {{$out}}
    @endif
@endsection
