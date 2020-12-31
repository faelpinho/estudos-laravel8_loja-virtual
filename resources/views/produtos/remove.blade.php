@extends('template')

@section('title', 'Remover produto')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Página de remover produto</h1>
            <p>I'm in resources/views/produtos/remove.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
<script>
    let data = {} // Teste com todos os dados. {{-- Teste. Este comentário aqui não deve aparecer --}}
    let message = '[via JS] O produto foi removido!'
    let elemento = document.getElementById('message');
    elemento.innerHTML = message;
</script>
@endpush
{{-- /javascript --}}

{{-- EOF --}}