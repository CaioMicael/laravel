@section('title', $title)

@section('content')
    <div class="container">
        <div class="navigation mt-4">
            <h2>Navegação</h2>
            <div class="list-group">
                <a href="{{ route('imc') }}" class="list-group-item list-group-item-action">Calculadora de IMC</a> <br>
                <a href="{{ route('sono') }}" class="list-group-item list-group-item-action">Sono Ideal</a> <br>
                <a href="{{ route('calculoAutonomia') }}" class="list-group-item list-group-item-action">Calcular autonomia veículo</a>
            </div>
        </div>
    </div>
@endsection
@yield ('content')