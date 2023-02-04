@extends('template')
    
@section('content')
<style>
    li, p{
        display: inline;
        margin-right: 15px;
    }
    li, form{
        display: inline;
    }
    li, a{
        display: inline;
    }
</style>
    <h1>Liste des produits</h1> <br>
        <ul>
            @foreach ($produits as $produit)
                <li>
                    <p>{{ $produit->id }}</p>
                    <p>{{ $produit->nom }}</p>
                    <p>{{ $produit->description }}</p>
                    <p>{{ $produit->prix }}</p>
                    <a href="/bo/produit/edit/{id}">Modifier</a>
                    <form action="{{  route('destroy', $produit->id)  }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">Supprimer</button>
                    </form>
                </li> <br>
            @endforeach
        </ul>

@endsection('content')