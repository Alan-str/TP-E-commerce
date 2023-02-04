@extends('template')
    
@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        <input type="text" name="nom">
        <input type="text" name="description">
        <input type="text" name="prix">
        <button type="submit">Ajouter</button>    
    </form>
@endsection('content')