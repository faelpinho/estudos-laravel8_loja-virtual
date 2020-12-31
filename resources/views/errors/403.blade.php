@extends('template')

{{-- @section e @yield tem o mesmo resultado. Testar a performance. --}}
@section('title', 'Acesso negado')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Acesso negado - Erro 403</h1>
            <p>Você não tem permissão para acessar a página solicitada.<br></p>
            <p>I'm in resources/views/403.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
@endpush
{{-- /javascript --}}

{{-- EOF --}}