<!DOCTYPE html>
<html>
<?php
session_start();

include "../connection.php";
$retry= isset($_GET['retry'])? $_GET['retry'] : '0';


if($retry > 2){
  echo "<script>document.getElementById('error').innerHTML = 'Maximum tries reached' ;</script>";
  echo $_SESSION["ZONE_LOGIN_TIMER"];
  $_SESSION["ZONE_LOGIN_TIMER"] = date("Y-m-d H:i:s", strtotime("+1 minutes"));
  
  header ("location: ?");
}

if($_SESSION["ZONE_LOGIN_TIMER"] > date("Y-m-d H:i:s")){
  //echo date("Y-m-d H:i:s");
  //echo "NO OF RETRIES MAXED OUT wait until {$_SESSION['ZONE_LOGIN_TIMER']}";
  echo '<script> document.getElementsByClassName("container").style = "visibility:hidden"</script>';
}
?>
    <head>
        <meta charset="UTF-8">
        <title>Barangay Information System</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-black">
        <div class="container" style="margin-top:30px">
          <div class="col-md-4 col-md-offset-4">
              <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center;">
                <img src="../../img/tan-awan.png" style="height:110px;"/>
              <h3 class="panel-title">
                <strong>
                    Barangay Zone Leader
                </strong>
              </h3>
            </div>
            <div class="panel-body">
              <form role="form" method="post">
                <div class="form-group">
                  <label for="txt_username">Username</label>
                  <input type="text" class="form-control" style="border-radius:0px" name="txt_username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="txt_password">Password</label>
                  <input type="password" class="form-control" style="border-radius:0px" name="txt_password" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-sm btn-primary" name="btn_login">Log in</button>
                <label id="error" class="label label-danger pull-right"></label> 
              </form>
            </div>
          </div>
          </div>
        </div>

      <?php
        if($retry > 0)
        {
          $retry_left = 3-$retry;
          echo "<script>document.getElementById('error').innerHTML = 'Invalid Account {$retry_left} tries left' ;</script>";
        }
        
        if(isset($_POST['btn_login']))
        { 
            $username = $_POST['txt_username'];
            $password = $_POST['txt_password'];

            $user = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password' ");
            $numrow_user = mysqli_num_rows($user);
            
            if($_SESSION["ZONE_LOGIN_TIMER"] > date("Y-m-d H:i:s")){
              
              echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Maximum retries reach";</script>';
            }
            else{
              if($numrow_user > 0)
              {
                  while($row = mysqli_fetch_array($user)){
                    $_SESSION['role'] = "Zone Leader";
                    $_SESSION['userid'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                  }    
                  header ('location: ../permit/permit.php');
              }
              else
              {
                echo $retry;
                $retry++;
                //echo "<script> alert('invalid credential')</script>";
               
                header ("location: ?retry={$retry}");
              }
            }
        }
        
      ?>

    </body>
    
</html>