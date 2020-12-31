@extends('template')

{{-- @section e @yield tem o mesmo resultado. Testar a performance. --}}
@section('title', 'Página não encontrada')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Página não encontrada - Erro 404</h1>
            <p>A página que você solicitou não foi encontrada.<br>
            Por favor, verifique se o endereço está correto.</p>
            <p>I'm in resources/views/404.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
@endpush
{{-- /javascript --}}

{{-- EOF --}}