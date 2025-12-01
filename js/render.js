function renderCatalog(products, catalog){
    catalog.innerHTML='';
    products.forEach(function (elem) {
        card = `<article class="catalog__card card">
                                <div class="card__img-wrapper" id-${elem.id}>
                                    <img src="img/catalog/${elem.imgSrc}" alt="" class="card__img">
                                </div>
                                <div class="card__body">
                                    <div class="card__title">${elem.name}</div>
                                    <div class="card__button button">Adaugă în coș</div>
                                    <strong class="card__price-wrapper">Prețul: <span class="card__price">${elem.price} lei</span></strong>
                                </div>
                            </article>`

        catalog.insertAdjacentHTML('beforeend', card);
    });
}