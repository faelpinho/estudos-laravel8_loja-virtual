@extends('template')

{{-- @section e @yield tem o mesmo resultado. Testar a performance. --}}
@section('title', 'Exibindo produto')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Hello world,</h1>
            <p>from Laravel with Blade!<br>
            I'm in resources/views/home.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
<script>
    let data = {} // Teste com todos os dados. {{-- Teste. Este comentário aqui não deve aparecer --}}
    let message = '[via JS] Seja bem-vindo a nossa loja!'
    let elemento = document.getElementById('message');
    elemento.innerHTML = message;
</script>
@endpush
{{-- /javascript --}}

{{-- EOF --}}