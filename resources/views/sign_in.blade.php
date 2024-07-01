@extends('layouts.app')

@section('content')
    <div>
        <form action="">
            <div>
                <input type="text" placeholder="nome" required>
                <input type="text" placeholder="cognome" required> 
            </div>
            <div>
                <input type="mail" placeholder="e-mail" required>
                <input type="password" placeholder="password" required>
            </div>
            <button>INVIA</button>
        </form>
        <span>
            Sei già iscritto? Clicca <a style="text-decoration: underline" href=" {{route('login')}} ">qui</a> per accedere.
        </span>
    </div>
@endsection
