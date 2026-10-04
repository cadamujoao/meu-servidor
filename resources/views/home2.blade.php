<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1>Bem vindo aa Home!</h1>
<p>
    Olá, {{ $name }}
</p>

<ul class="list-disc list-inside">
    @foreach ($habits as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

@auth
    <p>Você está logado!</p>
@endauth

@guest
    <p>Você não está logado!</p>
@endguest

<img src="/img/rauk.jpg" alt="Rauk" width="40%" height="80%">
</body>