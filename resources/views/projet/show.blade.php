@extends('layouts.app')


@section('content')

<h1>Details</h1>


<table class="table table-bordered">

    <tr>
        <th>Nom du Projet:</th>
        <td>{{ $projet->nom }}</td>
    </tr>

    <tr>

        <th>Description:</th>
        <td>{{ $projet->description }}</td>

    </tr>

    <tr>

        <th>Date de debut:</th>
        <td>{{ $projet->dateDeDebut }}</td>

    </tr>

    <tr>

        <th>Date de fin:</th>
        <td>{{ $projet->dateDeFin }}</td>

    </tr>

</table>

@endsection