// require('./bootstrap');

// wyeksportowanie globalnie biblioteki jQuery
window.$ = window.jQuery = require('jquery');
window.bootstrap = require('bootstrap');
window._=require('lodash');
require('./vendor/jsvalidation/js/jsvalidation');
window.Swal=require('sweetalert2');

// dolozenie bootstrapa i zestawu ikon bootstrapa
// require('bootstrap');


const toastFunction = () => {
    // przygotowanie wyswietlania toastow
    const toastNodes = document.querySelectorAll(`.toast`);
    const toastsTab = [...toastNodes]; // konwertuje Node na tablice

    // kazdy element w tablicy konwertujemy na obiekt Toast
    const toastList = toastsTab.map( singleToast => {
        return new bootstrap.Toast( singleToast )
    } );

    // dla kazdego obiektu Toast, wywolujemy metode show - do wyswietlenia
    toastList.forEach( singleToast => singleToast.show() );
};

const tooltipFunction = ( object ) => {
    const tooltipNodes = object.querySelectorAll(`[data-bs-toggle="tooltip"]`);
    const tooltipsTab = [...tooltipNodes];

    const tooltipsList = tooltipsTab.map( singleTooltip => {
        return new bootstrap.Tooltip( singleTooltip );
    });
};

toastFunction();
tooltipFunction( document );


