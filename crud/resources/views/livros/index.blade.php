@extends('main')
@section('content')
@forelse($livros as $livro)
<br>
@include('livros.partials.filds')
<br>
@empty
  Ainda não há livros cadastrados nesse sistema
@endforelse
@endsection
