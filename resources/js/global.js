require('datatables.net-bs5');

const datatablesFunction = () => {

    $( () => {
        $('table').DataTable({
            "language": {
                "url": "/vendor/datatables/i18n/" + config.local + ".json"
            },
        });
    });

};

export { datatablesFunction };