@extends('template')

{{-- @section e @yield tem o mesmo resultado. Testar a performance. --}}
@section('title', 'Página não encontrada')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Muitas requisições simultâneas - Erro 429</h1>
            <p>Você tentou enviar multiplas requisições em um curto espaço de tempo.<br>
            Por favor, aguarde alguns segundos para tentar novamente.</p>
            <p>I'm in resources/views/429.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
@endpush
{{-- /javascript --}}

{{-- EOF --}}