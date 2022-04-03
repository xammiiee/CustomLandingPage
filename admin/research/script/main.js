$(document).ready(function () {
    
  // ADDING NEW RESEARCH
  $("#co-list").toggle();
  $("#tags-list").toggle();

  // CO-AUTHORS =======================================================================================
  $('#co-author').selectpicker();

  // TAGS =============================================================================================
  $("#btn-tags").click(function () {
    $("#tags-list").show();
    
    var value = $("#drop-tags").val();
    $('#tags-list').append('<li class="list-group-item" id="'+value+'">' + value + '</li>');

    $("#"+value+"").remove();
  })

  // SUBMIT FORM ======================================================================================
  $("#btnsubmit").click(function(){
    // INITIALIZE
    var title = $("#title").val();
    var main_author = $("#txtmain-author").val();
    var co_author = $("#co-list").val();
    var abstract = $("#abstract").val();
    var dpub = $("#dpub").val();
    var fstudy = $("#fstudy").val();
    var tags = $("#tags-list").val();

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
        url: "../api/function.php",
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
  // title
  $("#filter-title").click(function () {
    var value = $(this).val().toLowerCase();
    $("#res-title td").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  })
  
  $("#filter-author").click(function () {
    var col = "#filter-author";
    sortTable(col);
  })

  // sorting 
  function sortTable(tbcol) {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById(tbcol);
    switching = true;
    
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        
        //start by saying there should be no switching:
        shouldSwitch = false;
        
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[0];
        y = rows[i + 1].getElementsByTagName("TD")[0];
        
        //check if the two rows should switch place:
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
      }
    }
  }

});