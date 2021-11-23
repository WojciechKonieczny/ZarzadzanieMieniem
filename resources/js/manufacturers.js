require('datatables.net-bs5');
window.$ = window.jQuery = require('jquery');

$(function () {
    $('table').DataTable({
        "language": {
            "url": "/vendor/datatables/i18n/" + config.local + ".json"
        },
    });
});
