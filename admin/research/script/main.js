$(document).ready(function () {
  $("#cancel-1r").click(function () {
    var co = $("#co-authors").val();

    console.log("Letsgo");
  });

  // SUBMIT FORM 
  $("#btnsubmit1").click(function(){
    // INITIALIZE
    var title = $("#title").val();
    var main_author = $("#txtmain-author").val();
    var co_author = $("#co-list").val();
    var abstract = $("#abstract").val();
    var dpub = $("#dpub").val();
    var fstudy = $("#fstudy").val();
    var tags = $("#tags").val();

    // VALIDATE IF EMPTY
    if(title !="" && main_author != "" && co_author !="" && abstract != "" && dpub !="" && fstudy !="" && tags !="")
    {
      var values = 
      {
        title: title,
        main_author: main_author,
        co_author: co_author,
        abstract: abstract,
        dpub: dpub,
        fstudy: fstudy,
        tags: tags
      }
      $.ajax({
        type: "POST",
        url: "research.php",
        data: values,
        cache: false,
        success: function(data) {
        alert(data);
        },
        error: function(xhr, status, error) {
        console.error(xhr);
        }
        });
    }
    else
    {
      alert("Fill all Fields");
      return false;
    }
  });

  // DELETE 
  $("#btn_deleteresearch").click(function () {
   
    alert("Research Deleted");
  });

});