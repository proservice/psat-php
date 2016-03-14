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
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
