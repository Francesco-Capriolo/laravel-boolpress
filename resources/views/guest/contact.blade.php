@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1> Contact us: </h1>
                <form action="{{ route("guest.storeContact") }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="guestName">Inserisci il tuo nome</label>
                        <input class="form-control" type="text" name="guestName" id="guestName">
                    </div>

                    <div class="mb-3">
                        <label for="guestEmail">Inserisci la mail alla quale desideri essere ricontattato</label>
                        <input class="form-control" type="email" name="guestEmail" id="guestEmail">
                    </div>

                    <div class="mb-3">
                        <label for="guestMessage">Inserisci il corpo del messaggio che vuoi inviare</label>
                        <textarea class="form-control" id="guestMessage" type="text" value="" name="guestMessage" rows="7"></textarea>
                    </div>

                    <button class="btn btn-lg btn-primary" type="submit">Invia il messaggio</button>
                </form>
            </div>
        </div>
    </div>
@endsection
