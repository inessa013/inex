<?php $active = 'about'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INEX</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <?php include_once __DIR__ . '/component/sprite-svg.php'; ?>
    <?php include_once __DIR__ . '/component/header.php'; ?>
    <main class="main">
        <section class="about section">
            <div class="about__container container">
                <h1 class="about__title title-1">
                    Despre noi
                </h1>
                <div class="about__informatie">
                    <p class="about__paragraf">
                        La INEX, credem că moda nu este doar despre haine, ci despre exprimarea personalității tale. De la început, ne-am propus să oferim clienților noștri o experiență de shopping online plăcută și ușoară, oferind produse de calitate, în tendințe, și servicii excelente.
                    </p>
                    <p class="about__paragraf">
                        Fiecare articol din colecțiile noastre este ales cu grijă pentru a reflecta cele mai noi trenduri, confort și stil. Colaborăm cu designeri talentați și furnizori de încredere pentru a aduce în garderoba ta haine care să inspire și să pună în valoare frumusețea fiecărei persoane.
                    </p>
                    <p class="about__paragraf">
                        Suntem pasionați de ceea ce facem și lucrăm constant pentru a îmbunătăți oferta noastră și pentru a răspunde nevoilor clienților noștri. La INEX, tu ești în centrul atenției!
                    </p>
                    <p class="about__paragraf">
                        Îți mulțumim că ne-ai ales și promitem să facem tot posibilul pentru ca fiecare experiență cu INEX să fie una memorabilă!
                    </p>
                    <p class="about__paragraf">
                        Mai jos găsiți niște recenzii...
                    </p>
                </div>
                
            </div>
        </section>
    </main>

    <?php include_once __DIR__ . '/component/footer.php' ?>
    <script src="js/products.js"></script>
    <script src="js/catalog.js"></script>
</body>
</html>