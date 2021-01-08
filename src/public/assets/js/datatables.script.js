$(document).ready(function () {
    // contact-list-table
    $('#contact_list_table').DataTable({searching: false  });

    // zero table
    $('#zero_configuration_table').DataTable();

    // feature enable/disable

    $('#feature_disable_table').DataTable({
        "paging": false,
        "ordering": false,
        "info": false
    });

    // ordering or sorting

    $('#deafult_ordering_table').DataTable({
        "order": [
            [3, "desc"]
        ]
    });

    // multi column ordering
    $('#multicolumn_ordering_table').DataTable({
        columnDefs: [{
            targets: [0],
            orderData: [0, 1]
        }, {
            targets: [1],
            orderData: [1, 0]
        }, {
            targets: [4],
            orderData: [4, 0]
        }]
    });


    // hidden column
    $('#hidden_column_table').DataTable({
        responsive: true,
        "columnDefs": [{
            "targets": [2],
            "visible": false,
            "searchable": false
        },
        {
            "targets": [3],
            "visible": false
        }
        ]
    });


    // complex header
    $('#complex_header_table').DataTable();

    // dom positioning
    $('#dom_positioning_table').DataTable({
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    });


    // alternative pagination
    $('#alternative_pagination_table').DataTable({
        "pagingType": "full_numbers"
    });

    // scroll vertical
    $('#scroll_vertical_table').DataTable({
        "scrollY": "200px",
        "scrollCollapse": true,
        "paging": false
    });

    // scroll horizontal
    $('#scroll_horizontal_table').DataTable({
        "scrollX": true
    });

    // scroll vertical dynamic height
    $('#scroll_vertical_dynamic_height_table').DataTable({
        scrollY: '50vh',
        scrollCollapse: true,
        paging: false
    });

    // scroll vertical and horizontal
    $('#scroll_horizontal_vertical_table').DataTable({
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

    // comma decimal
    $('#comma_decimal_table').DataTable({
        "language": {
            "decimal": ",",
            "thousands": "."
        }
    });


    // language option
    $('#language_option_table').DataTable({
        "language": {
            "decimal":        "",
            "emptyTable":     "No data available in table",
            "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
            "infoEmpty":      "Showing 0 to 0 of 0 entries",
            "infoFiltered":   "(filtered from _MAX_ total entries)",
            "infoPostFix":    "",
            "thousands":      ",",
            "lengthMenu":     "Show _MENU_ entries",
            "loadingRecords": "Loading...",
            "processing":     "Processing...",
            "search":         "Search:",
            "zeroRecords":    "No matching records found",
            "paginate": {
                "first":      "First",
                "last":       "Last",
                "next":       "Next",
                "previous":   "Previous"
            },
            "aria": {
                "sortAscending":  ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });

})
