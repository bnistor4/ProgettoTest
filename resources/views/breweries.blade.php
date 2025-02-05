@extends('layouts.app')

@section('title', 'Elenco Birrifici')

@section('content')
<h1>Elenco Birrifici</h1>
<button onclick="fetchBreweries()">Aggiorna</button>
<button class="logout" onclick="logout()">Logout</button>
<ul id="brewery-list"></ul>
@endsection