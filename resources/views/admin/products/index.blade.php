@extends('layouts.app')

@section('content')
<div class="top">
    <h2>Produits</h2>
    <a class="btn" href="{{ route('products.create') }}">+ Ajouter</a>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Référence</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Catégorie</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($products as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->reference }}</td>
            <td>{{ number_format($p->price, 2) }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->category?->name }}</td>
            <td>
                <a class="btn" href="{{ route('products.edit', $p) }}">Modifier</a>

                <form method="POST" action="{{ route('products.destroy', $p) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn danger" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="7">Aucun produit.</td></tr>
    @endforelse
    </tbody>
</table>

<div style="margin-top:12px;">
    {{ $products->links() }}
</div>
@endsection
