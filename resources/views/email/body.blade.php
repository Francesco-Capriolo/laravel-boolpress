<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    {{-- @dump($author, $authorEmail, $message) --}}
    <h1>L'utente {{ $author }} ti ha contattato </h1>
    <h3>La sua email : {{ $authorEmail }} </h3>
    <p>
        Questo è il contenuto del messaggio: {{ $guestMessage }}
    </p>
</body>
</html>
