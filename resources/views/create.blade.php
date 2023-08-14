@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('entreprise.store') }}">
            @csrf
            <!-- Utilisez la méthode POST -->
            
            <label for="nom_entreprise">Nom de l'entreprise:</label>
            <input type="text" id="nom_entreprise" name="nom_entreprise" required><br>

            <label for="num_action">Numéro d'action:</label>
            <input type="text" id="num_action" name="num_action" required><br>

            <label for="credit_impot">Crédit d'impôt:</label>
            <input type="checkbox" id="credit_impot" name="credit_impot"><br>

            <label for="droit_individuel">Droit de tirage individuel:</label>
            <input type="checkbox" id="droit_individuel" name="droit_individuel"><br>

            <label for="droit_collectif">Droit de tirage collectif:</label>
            <input type="checkbox" id="droit_collectif" name="droit_collectif"><br>

            <label for="theme_formation">Thème de formation:</label>
            <input type="text" id="theme_formation" name="theme_formation" required><br>

            <label for="mode_formation">Mode de formation:</label>
            <input type="text" id="mode_formation" name="mode_formation" required><br>

            <!-- Autres champs similaires... -->

            <button type="submit">Soumettre</button>
        </form>
    </div>
@endsection.