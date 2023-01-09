@extends('layouts.app')


@section('content')


<h1>Modifier projet</h1>


@if ($errors->any())

<div class="alert alert-danger">

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>

@endif

<form method="post" action="{{ url('projet/'. $projet->id) }}">
    @method('PATCH')
    @csrf


    <div class="form-group mb-3">

        <label for="nom">Nom du projet:</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrer Nom" name="nom" value="{{ $projet->nom }}">

    </div>

    <div class="form-group mb-3">

        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" placeholder="Entrer description" name="description" value="{{ $projet->description }}">

    </div>

    <div class="form-group mb-3">

        <label for="dateDeDebut">Date de debut:</label>
        <input type="date" class="form-control" id="dateDeDebut" placeholder="Entrer dateDeDebut" name="dateDeDebut" value="{{ $projet->dateDeDebut }}">

    </div>

    <div class="form-group mb-3">

        <label for="dateDeFin">Date de fin:</label>
        <input type="date" class="form-control" id="dateDeFin" placeholder="dateDeFin" name="dateDeFin" value="{{ $projet->dateDeFin }}">

    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>

</form>

@endsection