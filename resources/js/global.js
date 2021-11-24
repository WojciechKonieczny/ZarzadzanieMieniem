require('datatables.net-bs5');

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

export { datatablesFunction };