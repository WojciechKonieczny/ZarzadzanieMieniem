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

const sweetAlertFunction = () => {
    $('form[name=confirm-action]').on('submit', function(e) {
        e.preventDefault();
        const data = $(e.currentTarget).data();
        const message = !_.isNil(data.message) ? data.message : 'NO_MESSAGE_PROVIDED';
        const icon = !_.isNil(data.icon) ? data.icon : 'warning';
        const confirmText = !_.isNil(data.confirmText) ? data.confirmText : 'Yes';
        const confirmClass = !_.isNil(data.confirmClass) ? data.confirmClass : '';
        const cancelText = !_.isNil(data.cancelText) ? data.cancelText : 'No';    
        const cancelClass = !_.isNil(data.cancelClass) ? data.cancelClass : '';    
    
        Swal.mixin({
            customClass: {
                confirmButton: confirmClass,
                cancelButton: cancelClass
            },
            buttonsStyling: false
        }).fire({
            text: message,
            showCancelButton: true,
            confirmButtonText: confirmText,      
            cancelButtonText: cancelText,
            focusCancel: true,
            icon: icon
        }).then((result) => {
            if (result.value) {
                this.submit()
            }
        });
    });
}



export { datatablesFunction, select2Function, sweetAlertFunction };