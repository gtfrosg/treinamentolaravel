@extends('main')
@section('content')
<form method="post" action="/Livros/{{ $livro->id}}">
@csrf
@method('patch')
@include('livros.partials.form')
</form>
@endsection
