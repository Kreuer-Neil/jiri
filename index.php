<?php

if (file_exists(__DIR__.'/database/database.php')) {
    require __DIR__.'/database/database.php';
}else {die('Problème général du fonctionnement de cette application');}



$db = getPDO();
$statement = $db->query('SELECT * FROM jiris WHERE starting_at < now() ORDER BY starting_at DESC');
$passed_jiris = $statement->fetchAll();

$statement = $db->query('SELECT * FROM jiris WHERE starting_at > now() ORDER BY starting_at DESC');
$upcoming_jiris = $statement->fetchAll();


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
            <?php if (count($upcoming_jiris) !== 0): ?>
                <ol>
                    <?php foreach ($upcoming_jiris as $upcoming_jiri): ?>
                        <li><a href="/jiris?id=<?= $upcoming_jiri['id'] ?>"><?= $upcoming_jiri['name'] ?></a></li>
                    <?php endforeach ?>
                </ol>
            <?php endif ?>
        </section>
        <section>
            <h2>Jiri passés</h2>
            <?php if (count($passed_jiris) !== 0): ?>
                <ol>
                    <?php foreach ($passed_jiris as $passed_jiri): ?>
                        <li><a href="/jiris?id=<?= $passed_jiri['id'] ?>"><?= $passed_jiri['name'] ?></a></li>
                    <?php endforeach ?>
                </ol>
            <?php endif ?>
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






