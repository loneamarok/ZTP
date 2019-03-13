<?php
session_start();
  require_once('dbconfig/config.php');

    @$ipAddress=$_SESSION['ipAddress'];
    $_SESSION['count']=0;
    while(1)
    {
        $query = "select * from login where id='$ipAddress'";

        $query_run = mysqli_query($con,$query);
        //echo mysql_num_rows($query_run);
        if($query_run)
        {
          if(mysqli_num_rows($query_run)>0)
          {
          $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
          
          $_SESSION['id'] = $row['id'];
          $_SESSION['pos'] = $row['pos'];
          $_SESSION['skip'] = $row['skip'];
          $_SESSION['count']++;
          }
          else
          {
            echo '<script type="text/javascript">alert("No such IP address exists. Invalid Credentials")</script>';
          }
        }
        else
        {
          echo '<script type="text/javascript">alert("Database Error")</script>';
        }
        sleep(3000);
      }

    ?>