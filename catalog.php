<?php $active = 'catalog'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include_once __DIR__ . '/component/sprite-svg.php'; ?>
    <?php include_once __DIR__ . '/component/header.php' ?>

    <main>
        <section class="section catalog">
            <div class="section__container container">
                <h1 class="catalog__title title-1">
                    Catalog
                </h1>
                <div class="catalog__body">
                    <div class="catalog__control control">
                        <h3 class="control__title">Filter pe categorii</h2>
                        <ul class="control__filter" data-filter>
                            <li class="control__item">
                                <label class="control__checkbox checkbox">
                                    <input type="checkbox" value="toate"  class="checkbox__input" checked>
                                    <span class="checkbox__title">Toate</span></label>
                            </li>
                            <li class="control__item">
                                <label class="control__checkbox checkbox" >
                                    <input type="checkbox" value="rochie"  class="checkbox__input">
                                    <span class="checkbox__title">Rochii</span></label>
                            </li>
                            <li class="control__item">
                                <label class="control__checkbox checkbox">
                                    <input type="checkbox" value="palton" class="checkbox__input">
                                    <span class="checkbox__title">Paltoane</span></label>
                            </li>
                            <li class="control__item">
                                <label class="control__checkbox checkbox">
                                    <input type="checkbox" value="pulover" class="checkbox__input">
                                    <span class="checkbox__title">Pulovere</span></label>
                            </li>
                            <li class="control__item">
                                <label class="control__checkbox checkbox">
                                    <input type="checkbox" value="sport" class="checkbox__input">
                                    <span class="checkbox__title">Gama sportivă</span></label>
                            </li>
                            <li class="control__item">
                                <label class="control__checkbox checkbox">
                                    <input type="checkbox" value="clasic" class="checkbox__input">
                                    <span class="checkbox__title">Haină clasică</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="catalog__flex" data-catalog>
                        
                    </div>
                </div>
            </div>
            
        </section>
    </main>

    <?php include_once __DIR__ . '/component/footer.php' ?>

    <script src="js/products.js"></script>
    <script src="js/render.js"></script>
    <script src="js/catalog.js"></script>
</body>
</html>