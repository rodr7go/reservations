<script src="{{ asset('js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.editor.min.js')}}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.select.min.js')}}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('js/plugins/dataTables/dataTables.columnFilter.js')}}"></script>

<script>
    $('.dataTable').DataTable({
//        serverSide: true,
        processing: true,
        responsive: true,
//            stateSave: true,
//        ajax: '/payroll/api/vacation_requests/get/pending',
//        columns: [
//        ],
        language: {
            search: 'Buscar',
            paginate: {
                next: 'Sig',
                previous: 'Prev'
            },
            infoEmpty: 'Viendo 0 de 0 registros',
            emptyTable: 'No hay registros en la tabla',
            info: "<em><small>Página _PAGE_ de _PAGES_</small></em>",
            lengthMenu: "Ver _MENU_ registros"
        }
    });

</script>