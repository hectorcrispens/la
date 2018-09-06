<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('plugins/bootstrap-tagsinput-latest/bootstrap-tagsinput.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>


<!-- Jquery Nestable -->
<script src="{{ asset('plugins/nestable/jquery.nestable.js') }}"></script>

<!-- Autosize Plugin Js -->
<script src="{{ asset('plugins/autosize/autosize.js') }}"></script>

<!-- Moment Plugin Js -->
<script src="{{ asset('plugins/momentjs/moment.js') }}"></script>

<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Custom Js -->

<script src="{{ asset('js/pages/forms/basic-form-elements.js') }}"></script>

<script src="{{ asset('js/pages/ui/sortable-nestable.js') }}"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#tabla').DataTable({"language": {
            "search": "Buscar:",
            "zeroRecords": "No se encontraron Resultados",
            "infoFiltered": " - filtrado sobre _MAX_ entradas",
            "infoEmpty": "Ninguna Entrada para mostrar",
            "paginate": {
                "first":      "Primero",
                "last":       "Último",
                "next":       "Próximo",
                "previous":   "Previo"
            },"lengthMenu":     "Mostrar _MENU_ entradas",
            "info":           "Mostrando _START_ de _END_ de _TOTAL_ entradas",
            colReorder: true
        }
        });


    } );
</script>

<script type="text/javascript">
    function collapse(){
        $('.dd').nestable('collapseAll');
    }
    function expand(){
        $('.dd').nestable('expandAll');
    }
</script>

<script>
    function myFunction() {
        var tag= $('#mySelect option:selected' ).val();

        $('#tg').tagsinput('add',tag);

        var x = document.getElementById("mySelect");
        x.remove(x.selectedIndex);
    }
</script>
<script type="text/javascript">
    $('#tg').on('beforeItemRemove', function(event) {
        // event.item: contains the item
        var tex = event.item;
        var x = document.getElementById("mySelect");
        var option = document.createElement("option");
        option.text = tex;
        option.value= tex;
        x.add(option);

    });
</script>
