@extends('layouts.app')

@section('content')
<div>
    <form action="">
        <input type="text" placeholder="user" required>
        <input type="password" placeholder="password" required>
        <button>INVIA</button>
    </form>
    <span>
        Non sei ancora iscritto? Clicca <a style="text-decoration: underline" href=" {{route('sign_in')}} ">qui</a> per iscriverti.
    </span>
</div>
    
@endsection