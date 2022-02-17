<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="/bonjour">Hello</a></li>
        <li><a href="/au-revoir">Good bye</a></li>
        <li><a href="/exercice/categories">Catégories</a></li>
        <li><a href="/exercice/films">Films</a></li>
        <li><a href="/a-propos">A propos</a></li>
        
    </ul>

    @yield('content')
</body>
</html>
