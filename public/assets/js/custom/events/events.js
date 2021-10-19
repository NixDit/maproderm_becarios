"use strict";
// Class definition

(()=>{
    let url = '/eventos/get-all',

        columns = [
            {
                "field"     : 'name',
                "title"     : 'Puesto',
                "sortable"  : 'asc',
                "width"     : 200,
                "type"      : 'string',
                "textAlign" : 'center',
                template    : function(data) {
                    return `<span class="font-weight-bolder">${data.name}</span>`;
                }
            },
            {
                "field"     : 'type',
                "title"     : 'Tipo de sueldo',
                "sortable"  : 'asc',
                "width"     : 100,
                "type"      : 'int',
                "textAlign" : 'center',
                template    : function(data) {
                    let type;
                    switch (data.type) {
                        case 1:
                                type = 'Base';
                            break;
                        case 2:
                                type = 'Por destajo';
                            break;
                        default:
                                type = 'Sin registro';
                            break;
                    }

                    return `<span href="javascript:;" class="label label-primary label-pill label-inline" style="line-break: anywhere;">${type}</span>`;
                }
            },
            {
                "field"     : 'salary',
                "title"     : 'Salario',
                "sortable"  : 'asc',
                "width"     : 100,
                "type"      : 'int',
                "textAlign" : 'center',
                template    : function(data) {
                    let salary = (data.salary && Number(data.salary) > 0) ? data.salary : 'No registrado';//Condicional ternario (if pequeño)
                    return `<a href="javascript:;" style="line-break: anywhere;">${salary}</a>`;
                }
            },
            // {
            //     "field"     : 'salary_per_day',
            //     "title"     : 'Salario diario',
            //     "sortable"  : 'asc',
            //     "width"     : 100,
            //     "type"      : 'int',
            //     "textAlign" : 'center',
            //     template    : function(data) {
            //         return `<a href="javascript:;" style="line-break: anywhere;">${data.salary_per_day}</a>`;
            //     }
            // },
            // {
            //     "field"     : 'salary_per_hour',
            //     "title"     : 'Salario por hora',
            //     "sortable"  : 'asc',
            //     "width"     : 100,
            //     "type"      : 'int',
            //     "textAlign" : 'center',
            //     template    : function(data) {
            //         return `<a href="javascript:;" style="line-break: anywhere;">${data.salary_per_hour}</a>`;
            //     }
            // },
            {
                "field"     : 'created_at',
                "title"     : 'Fecha de creación',
                "sortable"  : 'asc',
                "width"     : 200,
                "type"      : 'date',
                "textAlign" : 'center',
                template    : function(data) {
                    let date       = new Date(data.created_at),
                        dateFormat = new Intl.DateTimeFormat('es', { year: 'numeric',month: 'long',day: '2-digit' }).format(date);
                    return `<span class=""><i> ${dateFormat} </i></span>`;
                }
            },
            {
                "field"     : '',
                "title"     : 'Acciones',
                "width"     : 200,
                "type"      : 'string',
                "textAlign" : 'center',
                "autoHide"  : false,
                "overflow"  : 'visible',
                template: function(row) {
                    return '\
                        <button href="javascript:;" class="btn btn-sm btn-clean btn-icon delete-job" data-id="' + row.id + '" data-name="'+ row.name +'" title="Eliminar puesto">\
                            <span class="svg-icon svg-icon-md">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </button>\
                        <a href="' + HOST_URL + '/puestos/' + row.id + '/editar' +'"  class="btn btn-sm btn-clean btn-icon" title="Editar puesto">\
                            <span class="svg-icon svg-icon-md">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                <rect x="0" y="0" width="24" height="24"/>\
                                <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                            </g>\
                                </svg>\
                            </span>\
                        </a>\
                    ';
                }
            }
        ];
    factoryNixDit.methods.activateDataTable(url,columns)
})();

var KTSweetAlert2Demo = function () {
	var _init = function () {

        $(document).on('click', '.delete-job', function() {
            let id = $(this).data('id');
            console.log(id);
            Swal.fire({
                title: "Está seguro de eliminar el puesto",
                text: $(this).data('name') + ' ?',
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, estoy de acuerdo",
                cancelButtonText: "No, cancelar",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: '/puestos/delete/'+ id,
                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        type: 'GET',
                    }).done(function(response){
                        Swal.fire(
                            response.title,
                            response.message,
                            response.type
                        )
                        setTimeout(function(){
                            location.reload();
                        }, 3000);
                    });
                }
            });

        });

    }

    return {
		// Init
		init: function () {
			_init();
		},
	};
}();

// Class Initialization
jQuery(document).ready(function () {
    KTSweetAlert2Demo.init();
});
