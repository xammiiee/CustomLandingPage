$(document).ready(function () {
   // Filtering Reset
   // $("#filter-reset").on(click(function(){
   //    console.log("Hello World");
   //    $('#filter1').append("<option selected>Sort by Relevance</option>");
   //    $('#filter1').append("<option selected disabled>Field of Study</option>");
   // }));
   
   // Display MLA for Research
   $("#r-citing").click(function () {
      var coauth = $("#coauth-1").val();
      var title = $("#r-title").val();
      var date = $("#r-date").val();
      console.log("Gumana");
      $("#r-citing-area").append(coauth +' "'+ title + '." '+ date);
      $("#r-citing-area").append("<textarea class='form-control' aria-label='With textarea' id=''>Hello po sainyo</textarea>");
   });

   // Register View
   // Research
   $('a.cls').click(function () {
      var id_r = $(this).attr('id');
      var view = $("#rView" + id).val();
      
      view = parseInt(view);
      view_r = view + 1;

      $.ajax({
         url:"http://localhost/CustomLandingPage/view/citation.php",
         method:"POST",
         data:{view_r:view_r,id_r:id_r},
         success:function(data)
         {
            // alert("I viewed it "+data);
         }
        });
   });
   
   // Journal
   $('a.cls').click(function () {
      var id_j = $(this).attr('id');
      var view = $("#jView" + id).val();
      
      view = parseInt(view);
      view_j = view + 1;

      $.ajax({
         url:"http://localhost/CustomLandingPage/view/citation.php",
         method:"POST",
         data:{view_j:view_j,id_j:id_j},
         success:function(data)
         {
            // alert("I viewed it "+data);
         }
        });
   });
   // Article
   $('a.cls').click(function () {
      var id_a = $(this).attr('id');
      var view = $("#aView" + id).val();
      
      view = parseInt(view);
      view_a = view + 1;

      $.ajax({
         url:"http://localhost/CustomLandingPage/view/citation.php",
         method:"POST",
         data:{view_a:view_a,id_a:id_a},
         success:function(data)
         {
            // alert("I viewed it "+data);
         }
        });
   });
   
   // News
   $('a.cls').click(function () {
      var id_n = $(this).attr('id');
      var view = $("#nView" + id).val();
      
      view = parseInt(view);
      view_n = view + 1;

      $.ajax({
         url:"http://localhost/CustomLandingPage/view/citation.php",
         method:"POST",
         data:{view_n:view_n,id_n:id_n},
         success:function(data)
         {
            // alert("I viewed it "+data);
         }
        });
   });

   // Register Copied
    // Research
   // Article
   // Journal
   // News
});