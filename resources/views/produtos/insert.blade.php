@extends('template')

@section('title', 'Inserir novo produto')


{{-- content --}}
@section('content')
    @parent
    <div class="row">
        <div class="col">
            <h1>Inserir novo produto</h1>
            <p>I'm in resources/views/produtos/insert.blade.php</p>
        </div>
    </div>
@endsection
{{-- /content --}}


{{-- javascript --}}
@push('javascript')
<!-- no js for include here, bro -->
@endpush
{{-- /javascript --}}

{{-- EOF --}}