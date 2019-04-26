    <?php
      include('_con.php');
    ?>
<!DOCTYPE html>
<html>
<head>
    <?php
      include('head.php');
    ?>
    <script>
      $(document).ready(function(){
        $('#tabla1').DataTable({

        });
      });
    </script>
</head>
<body>

    <table class="display" id="tabla1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titan</th>
        </tr>
      </thead>
    </table>

</body>
</html>