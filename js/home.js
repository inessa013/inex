const home = document.querySelector('[data-hero]');
const productHome = products.slice(0,3);

productHome.forEach(element => {
    card = `<div class="hero__catalog" data-hero data-id="${element.id}">
                <div class="hero__card">
                    <div class="hero__img-wrapper">
                        <img src="img/catalog/${element.imgSrc}" alt="${element.name}" class="hero__img">
                    </div>
                    <div class="hero__info">
                        <h3 class="hero__card-title">${element.name}</h3>
                        <strong class="hero__price">${element.price} lei</strong>
                    </div>
                </div>
            </div>`

    home.insertAdjacentHTML('beforeend', card);
});

