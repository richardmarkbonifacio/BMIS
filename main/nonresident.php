<html>
<head>
    <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <style>
    .no-print{
        display:none;
    }
    .dataTables_filter input { 
    padding-top: 20px;
    padding-bottom: 20px;}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img alt="Brand" src="../img/tan-awan.png" style="width:50px; margin-top:-15px; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="../login.php">Admin</a></li>
        <li><a href="../pages/resident/login.php">Resident</a></li>
        <li><a href="nonresident.php">Non-Resident</a></li>
        <li><a href="../pages/zone/login.php">Zone Leader</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php include "../pages/connection.php";?>
<?php include "../pages/resident/function.php"; ?>

<div class="wrapper row-offcanvas row-offcanvas-left">
  <div class="container-fluid">
      <!-- ========================= MODAL ======================= -->
      <div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Non Resident form</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label" >Name:</label><br>
                                        <div class="col-sm-4">
                                            <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname"/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthdate:</label>
                                        <input name="txt_bdate" class="form-control input-sm input-size" type="date" placeholder="Birthdate"/>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="control-label">Age:</label>
                                        <input name="txt_age" class="form-control input-sm input-size" type="number" placeholder="Age"/>
                                    </div> -->


                                    <div class="form-group">
                                        <label class="control-label">Barangay:</label>
                                        <input name="txt_brgy" class="form-control input-sm input-size" type="text" placeholder="Barangay"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Household #:</label>
                                        <input name="txt_householdnum" class="form-control input-sm input-size" type="number" min="1" placeholder="Household #"/>
                                    </div>

                                </div>

                                <div class="col-md-6 col-sm-12">
                                    
                                    <div class="form-group">     
                                        <label class="control-label">Gender:</label>
                                        <select name="ddl_gender" class="form-control input-sm">
                                            <option selected="" disabled="">-Select Gender-</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label class="control-label">Zone #:</label>
                                        <input name="txt_zone" class="form-control input-sm" type="text"  placeholder="Zone #"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Municipality:</label>
                                        <input name="txt_municipality" class="form-control input-sm" type="text"  placeholder="Municipality"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Municipality:</label>
                                        <input name="txt_contact" class="form-control input-sm" type="text"  placeholder="Contact No."/>
                                    </div>

                                </div>


                                
                            </div>

                            

                        </div>

                        <div class="row">

                            <div class="container-fluid">
                            <br><br><h3>Health declaration</h3><br>
                                <div class="col-md-12 col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label">Foreign countries you have worked, visited, transited in the past 14 days?</label>
                                        <input name="txt_question1" class="form-control input-sm" type="text" placeholder="Answer..."/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Cities int he Philippines you have worked, visited, transited in the past 14 days?</label>
                                        <input name="txt_question2" class="form-control input-sm" type="text" placeholder="Answer..."/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Have you been sick in the past 30 days?</label>
                                        <input name="txt_question3" class="form-control input-sm" type="text" placeholder="Yes/No"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">In the last 14 days, did you have any of the following: fever, colds, coughs, sore throat, loss of smell and tase, muscle pain, </label>
                                        <label class="control-label">head ache or difficulty in breathing?</label>
                                        <input name="txt_question4" class="form-control input-sm" type="text" placeholder="Yes/No"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">In the last 14 days, have you been in close contact or exposed to any person suspected of or confirmed with COVID-19?</label>
                                        <input name="txt_question5" class="form-control input-sm" type="text" placeholder="Yes/No"/>
                                    </div><br><br>
                                    <div class="form-group">
                                        <label class="control-label">Declaration and Data Privacy Consent Form</label>
                                        <p><br>By signing this form, I declare that the information I have given is true, correct, and complete. I understand that failure to answer any question or giving a false answer can be penalized in accordance with law.
                                        <br><br>
                                        I also voluntarily and freely consent to the collection and sharing of the above personal information only in relation to BMIS’s compliance to Republic of the Philippines COVID-19 business operation requirements and in accordance with the Data Privacy Act.</p><br>
                                        <label>
                                            <input type="checkbox" name="agree"> I Understand
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add_non_resident" id="btn_add_non_resident" value="Add Resident"/>
                        <!-- <input type="submit" class="btn btn-primary btn-sm" name="btn_test" id="btn_test" value="Test" data-toggle="modal" data-target="#healthDeclaration"/> -->
                    </div>
                </div>
              </div>
              </form>
            </div>

<script type="text/javascript">

    $(document).ready(function() {
 
        var timeOut = null; // this used for hold few seconds to made ajax request
 
        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here
 
        //when button is clicked
        $('#username').keyup(function(e){
 
            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch(e.keyCode)
            {
                //case 8:   //backspace
                case 9:     //tab
                case 13:    //enter
                case 16:    //shift
                case 17:    //ctrl
                case 18:    //alt
                case 19:    //pause/break
                case 20:    //caps lock
                case 27:    //escape
                case 33:    //page up
                case 34:    //page down
                case 35:    //end
                case 36:    //home
                case 37:    //left arrow
                case 38:    //up arrow
                case 39:    //right arrow
                case 40:    //down arrow
                case 45:    //insert
                //case 46:  //delete
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
            $('#user_msg').html(loading_html); // adding the loading text or image
        });
  });
function is_available(){
    //get the username
    var username = $('#username').val();
 
    //make the ajax request to check is username available or not
    $.post("check_username.php", { username: username },
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#user_msg').html('Not Available');
            document.getElementById("btn_add").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add").disabled = false;
        }
    });
 
}
</script>

  </div>
</div>

</body>


<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>

<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": [],
         "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
      });
  });

  $(document).ready(function () {             
  $('.dataTables_filterinput[type="search"]').css(
     {'width':'350px','display':'inline-block'}
  );
});
</script>


</html>