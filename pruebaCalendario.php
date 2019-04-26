<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8' />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="js/jquery.min.js"></script>
  <script src="js/moment.min.js"></script>
    
  <link rel="stylesheet" href="css/fullcalendar.min.css">
  <script src="js/fullcalendar.min.js"></script>

  </head>
  <body>

  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-7"><div id="Calendario"></div></div>
      <div class="col"></div>
    </div>

  </div>
  
  <script>
    $(document).ready(function() {
      $('#Calendario').fullcalendar();

    });

  </script>


  </body>
</html>