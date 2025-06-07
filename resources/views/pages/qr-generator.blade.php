@extends('layout.fronted')

@section('content')
    <div class="container mt-5">
        <h2>Generador de Código QR</h2>
        <form action="{{ route('qr.generate') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="qrtext" class="form-label">Texto para el QR</label>
                <input type="text" class="form-control" id="qrtext" name="qrtext" placeholder="Ingrese el texto" required>
            </div>
            <button type="submit" class="btn btn-primary">Generar QR</button>
        </form>
    </div>
@endsection
