$(document).ready(function($){
  $('body').on('click', '.view', function () {
    var id = $(this).data('id');
    var pdf_file = $(this).data('pdf_file');
    // var 
    // ajax
    $.ajax({
    type:"POST",
    url: "../api/action.php",
      data: { id: id, pdf_file: pdf_file },
    dataType: 'json',
    success: function(res){
      $('#fname').html(res.fname);
      }
    });
  });
});