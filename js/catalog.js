const catalog = document.querySelector('[data-catalog]');

const filterWrapper = document.querySelector('[data-filter]');
const filters = filterWrapper.querySelectorAll('input[type="checkbox"]');
const toate = filterWrapper.querySelector('input[value="toate"]');
const categorii = [...filters].filter((item) => item.value !== 'toate');
let values = [];
let productsActual = [];

renderCatalog(products, catalog);

categorii.forEach(function (elem) {

        elem.addEventListener('change', function () {
            toate.checked = false;

        if(values.includes(elem.value)){
            values = values.filter(e => e !== elem.value);
        }else if(elem.checked){
            values.push(elem.value);
        } 
        
        console.log(values);


        productsActual = products.filter(function (elem) {
            if(values.includes(elem.category)) return elem;
        })
        renderCatalog(productsActual, catalog);
    });

    toate.addEventListener('change', function (){
        if(toate.checked){
            categorii.forEach(function(elem){
                    elem.checked = false;
            });
            renderCatalog(products, catalog);
        } else {
            renderCatalog([], catalog);
        }

        values = [];
    });


});

