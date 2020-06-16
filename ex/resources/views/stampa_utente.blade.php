@extends ("main_layout")

@section('content')
<div class="main">
  {{$utente["nome"]}}: {{$utente["password"]}} 
</div>
@endsection
