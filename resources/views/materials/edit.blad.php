@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Materiale</h1>

        <form method="POST" action="{{ route('materials.update', ['material' => $material->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="codice">Codice:</label>
                <input type="text" class="form-control" id="codice" name="codice" value="{{ old('codice', $material->codice) }}" required>
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $material->nome) }}" required>
            </div>

            <div class="form-group">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" id="descrizione" name="descrizione" value="{{ old('descrizione', $material->descrizione) }}"></textarea>
            </div>

            <div class="form-group">
                <label for="giacenza">Giacenza:</label>
                <input type="number" class="form-control" id="giacenza" name="giacenza" value="{{ old('giacenza', $material->giacenza) }}" required>
            </div>

            <div class="form-group">
                <label for="giacenza_minima">Giacenza Minima:</label>
                <input type="number" class="form-control" id="giacenza_minima" name="giacenza_minima" value="{{ old('giacenza_minima', $material->giacenza_minima) }}" required>
            </div>

            <div class="form-group">
                <label for="prezzo_unitario">Giacenza Minima:</label>
                <input type="number" class="form-control" id="prezzo_unitario" name="prezzo_unitario" value="{{ old('prezzo_unitario', $material->prezzo_unitario) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salva Modifiche</button>
        </form>
    </div>
@endsection
