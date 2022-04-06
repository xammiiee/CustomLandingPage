$(document).ready(function () {
   // Filtering Reset
   $("#filter-reset").on(click(function(){
      console.log("Hello World");
      $('#filter1').append("<option selected>Sort by Relevance</option>");
      $('#filter1').append("<option selected disabled>Field of Study</option>");
   }));
   
});