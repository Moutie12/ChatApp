<?php
include('connect.php');
      $sql = "SELECT * FROM details" ;
      $rows = mysqli_query($connect,$sql);
      while ($row = mysqli_fetch_assoc($rows))
      {
        $name= $row['name'];
        $message = $row['message'];
        $date = $row['date'];
        echo '<div class="users">
        <span id="span_name">'.$name.': </span>
        <span id="span_message">'.$message.'</span>
        <span id="span_date">'.$date.'</span>
      </div>' ;
      }
?>