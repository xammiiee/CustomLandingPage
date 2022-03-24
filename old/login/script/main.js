$(document).ready(function () {
   
   $("#but_submit").click(function () {
      // INITIALIZE
      
      console.log("Logged In");
      
      var email = $("#txt_uemail").val();
      var pass = $("#txt_upwd").val();

      if (email != "" && pass != "")
      {
         var values = 
         {
         email: email,
         pass: pass
         }
      $.ajax({
        type: "POST",
        url: "../CustomLandingPage/login/api/login_api_authenticate.php",
        data: values,
        cache: false,
         success: function (response)
         {
            if (response == "success")
            {
               window.location.href = "../../admin/index.php";
            }
            else
            {
               alert("Wrong Details");
            }
         }
        });
      }
   });
});