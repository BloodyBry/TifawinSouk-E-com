@extends('layouts.app')

@section('content')
<h2>Modifier le produit</h2>

<form method="POST" action="{{ route('products.update', $product) }}">
    @csrf
    @method('PUT')

    <div class="field">
        <label>Nom *</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" required>
    </div>

    <div class="field">
        <label>Référence (unique) *</label>
        <input type="text" name="reference" value="{{ old('reference', $product->reference) }}" required>
    </div>

    <div class="field">
        <label>Description courte</label>
        <textarea name="description_short" rows="4">{{ old('description_short', $product->description_short) }}</textarea>
    </div>

    <div class="field">
        <label>Prix *</label>
        <input type="number" step="0.01" min="0" name="price" value="{{ old('price', $product->price) }}" required>
    </div>

    <div class="field">
        <label>Stock *</label>
        <input type="number" min="0" name="stock" value="{{ old('stock', $product->stock) }}" required>
    </div>

    <div class="field">
        <label>Catégorie *</label>
        <select name="category_id" required style="width:100%; padding:10px;">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('category_id', $product->category_id) == $cat->id)>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn">Mettre à jour</button>
    <a class="btn" href="{{ route('products.index') }}">Retour</a>
</form>
@endsection
