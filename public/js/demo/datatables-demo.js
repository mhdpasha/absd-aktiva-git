// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    select: true,
    dom: 'Bfrtip',
    lengthMenu: [
      [ 10, 25, 50, -1 ],
      [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    columnDefs: [
      { "searchable": false, "targets": 6 }
    ],
        buttons: [
          {
            extend: 'print',
            text: 'Print',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'excel',
            text: 'Excel',
            className: 'btn btn-sm btn-success',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'pdf',
            text: 'PDF',
            className: 'btn btn-sm btn-danger',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          // {
          //   extend: 'csv',
          //   text: 'CSV',
          //   className: 'btn btn-sm btn-info',
          //   exportOptions: {
          //     columns: 'th:not(:last-child)'
          //   },
          // },
          {
            extend: 'pageLength',
            className: 'btn btn-sm btn-secondary',
          }
        ],
    scrollX: true,
  });
  table.buttons().container().appendTo( '#example_wrapper .col-md-6:eq(0)' )
});

$(document).ready(function() {
  $('#dataTable2').DataTable({
    select: true,
    dom: 'Bfrtip',
    lengthMenu: [
      [ 10, 25, 50, -1 ],
      [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    // columnDefs: [
    //   { "searchable": false, "targets": 6 }
    // ],
        buttons: [
          {
            extend: 'print',
            text: 'Print',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'excel',
            text: 'Excel',
            className: 'btn btn-sm btn-success',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'pdf',
            text: 'PDF',
            className: 'btn btn-sm btn-danger',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          // {
          //   extend: 'csv',
          //   text: 'CSV',
          //   className: 'btn btn-sm btn-info',
          //   exportOptions: {
          //     columns: 'th:not(:last-child)'
          //   },
          // },
          {
            extend: 'pageLength',
            className: 'btn btn-sm btn-secondary',
          }
        ],
    scrollX: true,
  });
});

$(document).ready(function() {
  $('#dataTableMin').DataTable({
    select: true,
    dom: 'Bfrtip',
    lengthMenu: [
      [ 10, 25, 50, -1 ],
      [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    columnDefs: [
      { "searchable": false, "targets": 4 }
    ],
        buttons: [
          {
            extend: 'print',
            text: 'Print',
            className: 'btn btn-sm btn-primary',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'excel',
            text: 'Excel',
            className: 'btn btn-sm btn-success',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          {
            extend: 'pdf',
            text: 'PDF',
            className: 'btn btn-sm btn-danger',
            exportOptions: {
              columns: 'th:not(:last-child)'
            },
          },
          // {
          //   extend: 'csv',
          //   text: 'CSV',
          //   className: 'btn btn-sm btn-info',
          //   exportOptions: {
          //     columns: 'th:not(:last-child)'
          //   },
          // },
          {
            extend: 'pageLength',
            className: 'btn btn-sm btn-secondary',
          }
        ],
    scrollX: true,
  });
  table.buttons().container().appendTo( '#example_wrapper .col-md-6:eq(0)' )
});