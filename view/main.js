$(document).ready(function () {
   // Filtering Reset
   $("#filter-reset").on(click(function(){
      console.log("Hello World");
      $('#filter1').append("<option selected>Sort by Relevance</option>");
      $('#filter1').append("<option selected disabled>Field of Study</option>");
   }));
   
   $("#r-citing").click(function () {
      var coauth = $("#coauth-1").val();
      var title = $("#r-title").val();
      var date = $("#r-date").val();
      console.log("Gumana");
      $("#r-citing-area").append(coauth +' "'+ title + '." '+ date);
      $("#r-citing-area").append("<textarea class='form-control' aria-label='With textarea' id=''>Hello po sainyo</textarea>");
   });
});