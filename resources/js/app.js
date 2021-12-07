// require('./bootstrap');

// wyeksportowanie globalnie biblioteki jQuery
window.$ = window.jQuery = require('jquery');
window.bootstrap = require('bootstrap');

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

toastFunction;

