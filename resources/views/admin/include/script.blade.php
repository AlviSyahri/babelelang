<script src="{{url('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js')}}"></script>
<script src="{{url('assets/js/plugins.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>

<script src="{{url('assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
<script src="{{url('assets/js/dashboard.js')}}"></script>
<script src="{{url('assets/js/widgets.js')}}"></script>
<script src="{{url('assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
<script src="{{url('assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
<script src="{{url('assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
<script src="{{url('assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>

<script src="{{url('assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{url('assets/js/lib/data-table/datatables-init.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 1
                }],
                "order": [
                    [1, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(1, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 1 && currentOrder[1] === 'asc') {
                    table.order([1, 'desc']).draw();
                } else {
                    table.order([1, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>
<script src="{{url('assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>