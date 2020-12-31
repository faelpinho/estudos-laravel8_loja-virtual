@extends('template')

{{-- @section e @yield tem o mesmo resultado. Testar a performance. --}}
@section('title', 'Exibindo produto')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Página inicial de produtos</h1>
            <p>I'm in resources/views/produtos/index.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
<script>
    let data = {} // Teste com todos os dados. {{-- Teste. Este comentário aqui não deve aparecer --}}
    let message = '[via JS] Produtos vendidos neste momento: calça, cobertor, celular, bota, pendrive...'
    let elemento = document.getElementById('message');
    elemento.innerHTML = message;
</script>
@endpush
{{-- /javascript --}}

{{-- EOF --}}