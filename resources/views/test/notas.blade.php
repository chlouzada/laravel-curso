@extends('template') 

@section('title')
  Minha anotações
@endsection

@section('content')
  <h1>Anotações</h1>
  <ul>
    <!-- <li>Anotação 1</li>
    <li>Anotação 2</li>
    <li>Anotação 3...</li> -->

    <!-- <?php foreach($notas as $nota): ?>
      <li><?=$nota;?></li>
    <?php endforeach;?> -->

    @foreach($notas as $nota)
    <li>{{$nota}}</li>
    @endforeach


  </ul>
@stop