@extends('layouts.app')


@section('content')

<h1>Ajouter un projet</h1>


@if ($errors->any())

<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

<form action="{{ url('projet') }}" method="POST">
    @csrf

    <div class="form-group mb-3">
        <label for="nom">Nom du projet:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez un nom" name="nom">
    </div>

    <div class="form-group mb-3">

        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" placeholder="description" name="description">

    </div>


    <div class="form-group mb-3">
        <label for="dateDeDebut">dateDeDebut:</label>
        <input type="date" class="form-control" id="dateDeDebut" placeholder="dateDeDebut" name="dateDeDebut">
    </div>

    <div class="form-group mb-3">
        <label for="dateDeFin">dateDeFin</label>
        <input type="date" class="form-control" id="dateDeFin" placeholder="dateDeFin" name="dateDeFin">
    </div>


    <button type="submit" class="btn btn-primary">Enregister</button>

</form>

@endsection