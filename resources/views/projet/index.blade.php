@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-11">

        <h2>Gestion de Projet</h2>

    </div>

    <div class="col-lg-1">
        <a class="btn btn-success" href="{{ url('projet/create') }}">Ajouter</a>
    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif



<table class="table table-bordered">

    <tr>

        <th>No</th>
        <th>Nom Projet</th>
        <th>Description</th>
        <th>Date de Debut</th>
        <th>Date de Fin</th>
        <th>Actions</th>

    </tr>

    @foreach ($projets as $index => $projet)

    <tr>
        <td>{{ $index }}</td>
        <td>{{ $projet->nom }}</td>
        <td>{{ $projet->description }}</td>
        <td>{{ $projet->dateDeDebut }}</td>
        <td>{{ $projet->dateDeFin }}</td>
        <td>

            <form action="{{ url('projet/'. $projet->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-info" href="{{ url('projet/'. $projet->id) }}">Détails</a>
                <a class="btn btn-primary" href="{{ url('projet/'. $projet->id .'/edit') }}">Modifier</a>

                <button type="submit" class="btn btn-danger">Supprimer</button>

            </form>
        </td>

    </tr>

    @endforeach
</table>

@endsection