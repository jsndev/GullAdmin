$(document).ready(function () {

    let table =  $('#scroll_horizontal_vertical_table').DataTable({
        "scrollY": 300,
        "scrollX": true,
        "lengthChange": true,
        "language": {
            "decimal":        "",
            "emptyTable":     "Nenhum resultado foi encontrado",
            "info":           "Exibindo de _START_ a _END_ do total de _TOTAL_ resultados",
            "infoEmpty":      "Exibindo de 0 a 0 do total de 0 resultados",
            "infoFiltered":   "(filtrado do total de _MAX_ resultados)",
            "infoPostFix":    "",
            "thousands":      ",",
            "loadingRecords": "Processando...",
            "processing":     "Processando...",
            "search":         "Procurar:",
            "zeroRecords":    "Nenhum registro correspondente encontrado",
            "lengthMenu":     "Exibiondo _MENU_ resultados",
            "paginate": {
                "first":      "Primeira",
                "last":       "Ultima",
                "next":       "Proxima",
                "previous":   "Anterior"
            }
        }

    });

    function disableButtons(disable) {
        $('#btnRemove').prop("disabled", disable);
        $('#btnEdit').prop("disabled", disable);
        $('#btnPrint').prop("disabled", disable);
        $('#btnPdf').prop("disabled", disable);
    }

    $('#scroll_horizontal_vertical_table tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
            disableButtons(true);
        }
        else {
            $('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            disableButtons(false);
        }
    } );

    $('#btnRemove').click( function () {
        table.row('.selected').remove().draw( false );
        disableButtons(true);
    } );

})
