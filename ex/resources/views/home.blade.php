@extends ("main_layout")

@section('content')
<div class="main">
  @foreach ($utenti as $utente)
    nome: <a href=" {{route('stampautente', 1)}}">{{$utente["nome"]}}</a> data di nascita: {{$utente["dateOfBirth"]}} <br><br>
  @endforeach
</div>
@endsection
