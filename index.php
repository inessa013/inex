<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INEX</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once __DIR__ . '/component/sprite-svg.php'; ?>
    <?php include_once __DIR__ . '/component/header.php'; ?>

    <main class="main">
        <section class="main__container container">
            <h1 class="title-1">
                Principala
            </h1>
            <a href="catalog.php" class="principala__button button">Deschide catalogul</a>
        </section>
        <div class="container">
            <section class="catalog__flex" data-info>

            </section>
        </div>
        <div class="principala">
            
        </div>
        
        
    </main>

    <?php include_once __DIR__ . '/component/footer.php' ?>
    <script src="js/products.js"></script>
    <script src="js/catalog.js"></script>
</body>
</html>