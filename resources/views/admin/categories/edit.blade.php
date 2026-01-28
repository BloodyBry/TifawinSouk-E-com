@extends('layouts.app')

@section('content')
<h2>Modifier la catégorie</h2>

<form method="POST" action="{{ route('categories.update', $category) }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label>Nom *</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}" required>
    </div>

    <div class="field">
        <label>Description</label>
        <textarea name="description" rows="4">{{ old('description', $category->description) }}</textarea>
    </div>

    <button class="btn">Mettre à jour</button>
    <a class="btn" href="{{ route('categories.index') }}">Retour</a>
</form>
@endsection
