require('datatables.net-bs5');

require('select2');
// podpiecie tlumaczen do select2
$.fn.select2.amd.define('select2/i18n/pl', [], require('select2/src/js/select2/i18n/pl'));

const datatablesFunction = (language) => {

    $( () => {
        $('table').DataTable({
            "language": {
                "url": "/vendor/datatables/i18n/" + language + ".json"
            },
            destroy: true,
            // "bDestroy": true,
        });
    });
};

const select2Function = (language) => {
    $('.select2').select2({
        theme: 'bootstrap-5',
        language: language,
        allowClear: true
    });
};



export { datatablesFunction, select2Function };