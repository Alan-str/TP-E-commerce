@extends('template')
    
@section('content')
    <form action="{{ route('update') }}" method="post">
        @csrf
        <input type="text" name="nom">
        <input type="text" name="description">
        <input type="text" name="prix">
        <button type="submit">Modifier</button>    
    </form>
@endsection('content')