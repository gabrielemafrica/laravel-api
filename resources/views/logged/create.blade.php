@extends('layouts.app')

@section('content')
    <main class="container text-center py-5">
        <h1>crea nuovo</h1>

        <form method="POST" action="{{ route('logged.store') }}" class="w-50 mx-auto" enctype="multipart/form-data">

            @csrf
            @method('POST')

            {{-- Immagine --}}
            <div class="form-group my-3">
                <label for="main_picture">Main picture</label>
                <br>
                <input type="file" name="main_picture" id="main_picture">
            </div>

            {{-- Nome --}}
            <div class="form-group my-3">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="nome">
            </div>

            {{-- Descrizione --}}
            <div class="form-group my-3">
                <textarea rows="4" name="descrizione" id="descrizione" class="form-control" placeholder="descrizione"></textarea>
            </div>

            {{-- Link --}}
            <div class="form-group my-3">
                <input type="text" name="link" id="link" class="form-control" placeholder="link">
            </div>

            {{-- Repo --}}
            <div class="form-group my-3">
                <input type="text" name="repo" id="repo" class="form-control" placeholder="repo">
            </div>

            {{-- Data --}}
            <div class="form-group my-3">
                <input type="date" name="data" id="data" class="form-control" placeholder="data">
            </div>

            {{-- Tipo di progetto --}}
            <div class="form-group my-3">
                <select name="type_id" id="type_id" class="form-select">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->type }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Tecnologie associate --}}
            <div class="form-group my-3">
                @foreach ($technologies as $technology)
                    <div class="form-check mx-auto" style="width: 200px">
                        <input class="form-check-input" type="checkbox" id="technology{{ $technology->id }}"
                            name="technologies[]" value="{{ $technology->id }}">
                        <label class="form-check-label" for="technology{{ $technology->id }}">
                            {{ $technology->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            {{-- Pulsante di invio --}}
            <div class="form-group my-3">
                <input type="submit" value="CREA" class="btn btn-primary">
            </div>
        </form>
    </main>
@endsection
