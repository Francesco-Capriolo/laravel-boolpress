@extends('layouts.app')

@section('content')
    <div class="wrapper w-75 mx-auto">
        <div class="container-fluid">
            <div class="row p-4">

                {{-- ? Per ogni valore rilevante ai fini del salvataggio abbiamo creato: --}}
                {{-- # Un campo modificabile (tipicamente un input) in cui l'utente può inserire i contenuti --}}
                {{-- § Un attributo del campo relativo di input chiamato "name" che ci consente di recupare il valore dal controller --}}
                <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title">
                        <div id="titleHelp" class="form-text">Inserisci un titolo </div>
                    </div>

                    <div class="mb-3">
                        <label for="image">Url dell'immagine</label>
                        <input type="file" id="image" name="image">
                    </div>

                    <div class="mb-3">

                        <label for="content" class="form-label">Inserisci il contenuto del post</label>
                        <textarea class="form-control" id="content" rows="10" name="content" id="decontentcription"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Pubblica il tuo nuovo post</button>
                </form>

            </div>
        </div>
    </div>
@endsection
