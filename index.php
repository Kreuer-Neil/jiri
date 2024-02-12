<?php

$jiris = [
        ['id'=>1, 'name'=>'Projet web 2025','time'=>DateTimeImmutable::createFromFormat('j-M-y','15-Jan-2025')],
        ['id'=>2, 'name'=>'Design Web 2024','time'=>DateTimeImmutable::createFromFormat('j-M-y','15-Jul-2024')],
        ['id'=>3, 'name'=>'Projet web 2024','time'=>DateTimeImmutable::createFromFormat('j-M-y','15-Jan-2024')],
        ['id'=>4, 'name'=>'Design web 2023','time'=>DateTimeImmutable::createFromFormat('j-M-y','15-Jul-2023')],
];



?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Jiri</title>
</head>
<body class="flex flex-col-reverse gap-4 container mx-auto">
<main class="flex gap-4 flex-col">
    <h1>Mes jurys</h1>
    <section>
        <h2>Jiri à venir</h2>
        <?php if(count($jiris) !== 0): ?>
        <ol>
            <?php foreach ($jiris as $jiri): ?>
            <li><a href="/jiris?id=<?= $jiri['id'] ?>"><?= $jiri['name'] ?></a></li>
            <?php endforeach ?>
        </ol>
        <?php endif ?>
    </section>
    <section>
        <h2>Jiri passés</h2>
        <ol>
            <li><a href="/jiris?id=3">Projet Web 2024</a></li>
            <li><a href="/jiris?id=4">Design Web 2023</a></li>
        </ol>
    </section>
</main>
<nav class="flex gap-4">
    <h2 class="sr-only">Menu principal</h2>
    <ul>
        <li><a href="/jiris"></a></li>
        <li><a href="/contacts"></a></li>
    </ul>
</nav>


</body>
</html>

<?php
echo "test";






