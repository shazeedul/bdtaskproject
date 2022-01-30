$(function () {
    // Summernote
    $('#summernote1').summernote({
      height: 250,   
      theme: 'monokai'
    });

    
  });
$(function () {
    // Summernote
    $('#summernote2').summernote({
      height: 150,   
      theme: 'monokai'
    });

    
  });




$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});