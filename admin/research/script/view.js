$(document).ready(function($){
  $('body').on('click', '.view', function () {
    var id = $(this).data('id');
    // var 
    // ajax
    $.ajax({
    type:"POST",
    url: "ajax-fetch-record.php",
    data: { id: id },
    dataType: 'json',
    success: function(res){
      $('#fname').html(res.fname);
      $('#lname').html(res.lname);
      $('#email').html(res.email);
      }
    });
  });
});