@extends('layouts.app')

@section('content')
<h2>Créer une catégorie</h2>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <div class="field">
        <label>Nom *</label>
        <input type="text" name="name" required>
    </div>

    <div class="field">
        <label>Description</label>
        <textarea name="description" rows="4"></textarea>
    </div>

    <button class="btn">Enregistrer</button>
    <a class="btn" href="{{ route('categories.index') }}">Retour</a>
</form>
@endsection
