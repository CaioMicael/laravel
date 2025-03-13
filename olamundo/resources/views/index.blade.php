@section('title', $title)
@section('content')
    <div>
        <h1>
            Olá, {{ $name }}
        </h1>
    </div>
    <div>
        <p>
           Idade: {{ $idade }}
        </p>
    </div>
    <div>
        <p>
            Altura: {{ $altura }}
        </p>
    </div>
    <div>
        <p>
            Peso: {{ $peso }}
        </p>
    </div>
    <a href="{{ route('imc') }}" class="btn btn-primary">Executar Rota</a>
@endsection
@yield ('content')