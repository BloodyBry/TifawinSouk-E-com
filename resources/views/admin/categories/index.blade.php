@extends('layouts.app')

@section('content')
<div class="top">
    <h2>Catégories</h2>
    <a class="btn" href="{{ route('categories.create') }}">+ Ajouter</a>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Slug</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @forelse($categories as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->slug }}</td>
            <td>
                <a class="btn" href="{{ route('categories.edit', $cat) }}">Modifier</a>

                <form method="POST" action="{{ route('categories.destroy', $cat) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn danger" onclick="return confirm('Supprimer ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @empty
        <tr><td colspan="4">Aucune catégorie.</td></tr>
    @endforelse
    </tbody>
</table>

<div style="margin-top:12px;">
    {{ $categories->links() }}
</div>
@endsection
