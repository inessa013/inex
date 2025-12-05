<?php $active = 'home'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INEX</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-hover.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <?php include_once __DIR__ . '/component/sprite-svg.tpl'; ?>
    <?php include __DIR__ . '/component/auth.tpl';  ?>
    <?php include_once __DIR__ . '/component/header.tpl'; ?> 

    <div class="back">
        <div class="back__img back__img0"></div>
        <div class="back__img back__img1"></div>
    </div>

    <main class="main">
        <section class="hero">
            <div class="hero__container container">
                <div class="hero__header">
                    <h1 class="hero__title">
                        Simte-te confortabil, fii tu însăți!
                    </h1>
                    <p class="hero__description">
                        Oferim o gamă variată de articole vestimentare care îmbină confortul cu stilul, pentru ca tu să strălucești oriunde ai merge.
                    </p>
                    <a href="catalog.php" class="hero__button button">Deschide catalogul</a>
                </div>
                <div class="hero__catalog" data-hero>

                </div>
                <a href="catalog.php" class="hero__catalog-link">Vezi întreg catalog - &gt;</a>
            </div>
        </section>
       
        
        
    </main>

    <?php include_once __DIR__ . '/component/footer.tpl' ?>
    <script src="js/products.js"></script>
    <script src="js/render.js"></script>
    <script src="js/home.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>