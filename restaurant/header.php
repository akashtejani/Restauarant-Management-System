<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <script src="js/angular.min.js"> </script>
    <link rel="stylesheet" href="style.css"/>
    <title>Restaurant Sofware</title> 
    <script>
      function validatecategory(str){ 
        if(str.length>4){
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {            
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML = this.responseText;
            }
          };
          var query = "validatecat.php?cat_name="+str;
          xhttp.open("GET",query , true);
          xhttp.send();
        }
      }
    </script>
  </head>
  <body style="background-color:white;">