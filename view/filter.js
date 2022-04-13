$(document).ready(function () {
   
   $("#filter-submit").click(function (e) {
      var filter1 = $("#filter1").val();
      var filter2 = $("#filter2").val();
      var getfstudy = $("#display-fstudy").val();
      var getcite = $("#").val();
      // var filter2 = $("#filter2").v
      if (filter1 > 0 || filter2 > 0) {
         $("tr")
      } 
      
      e.preventDefault();   
   });


   $("#filter-reset").click(function (e) {
      alert("Reset");
      $('#filter1q').val(false);
      e.preventDefault();   
   });
});