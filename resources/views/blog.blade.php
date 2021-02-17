<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<style>
.articolo {
    border: 1px solid black;
    padding: 20px;
    margin: 20px;
}
a {
    text-decoration: none;
    color: black;
    margin-left: 20px;
}

</style>
<body>
    <main>
        <!-- inserimento delle istanze php tramite foreach in html -->
        <?php foreach ($articoli as $articolo) { ?>
        <div class="articolo">
            <h1><?php echo $articolo->title?></h1>
            <p><?php echo $articolo->body?></p>
        </div>
        <?php } ?>
        <a href="/">Torna alla Home</a>
    </main>
</body>
</html>