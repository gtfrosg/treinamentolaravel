@extends('main')
@section('content')
<form method="post" action="/Livros">
@csrf
@include('livros.partials.form')
</form>
@endsection
