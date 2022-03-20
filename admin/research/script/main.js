$(document).ready(function () {
    
  // ADDING NEW RESEARCH
  $("#co-list").toggle();
  $("#tags-list").toggle();

  // CO-AUTHORS =======================================================================================
  $("#btn-co-author").click(function () {
    $("#co-list").show();
    
    var main_author = $("#txtmain-author").val();
    console.log(main_author);
    var value1 = $('#txtco-authors').val();
    var val_id = $("#txtco-authors").attr('id')
    $('#tags-list').append('<li class ="list-group-item">'+ value1 +'</li>');
    
    var remove_space = value1.replace(/ /g,'');
    $("#"+ remove_space+"").remove();
  })

  // TAGS =============================================================================================
  $("#btn-tags").click(function () {
    $("#tags-list").show();
    
    $('#tags-list').append('<li class="list-group-item" id="'+value+'">' + value + '</li>');

    $("#"+value+"").remove();
  })

  // SUBMIT FORM ======================================================================================
  $("#btnsubmit").click(function(){
    // INITIALIZE
    var title = $("#title").val();
    var main_author = $("#txtmain-author").val();
    var co_author = $("#co-list").text();
    var abstract = $("#abstract").text();
    var dpub = $("#dpub").val();
    var fstudy = $("#fstudy").val();
    var tags = $("#tags-list").text();

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
        url: "../submitpost.php",
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

  // DELETE =========================================================================================
  $("#btn_deleteresearch").click(function () {
   
   alert("Research Deleted");
  })
  
  // FILTERING BY SEARCHING =========================================================================
  $("#txtsearch_title").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

});