@extends('layout.fronted')

@section('content')
    <!-- Card 1 -->
    <x-util-card 
    title="Generador de QR"
    description="Generador de QR para links web o cualquier otro contenido."
    buttonText="Generar QR"
    buttonUrl="{{ route('qr.form') }}"></x-util-card>
@endsection
