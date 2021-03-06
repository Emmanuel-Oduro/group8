<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Group 8 add new student</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="resources/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="resources/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#161c29;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GROUP 8 </a>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color:#161c29;">
          <ul class="nav nav-sidebar">
            <li><a href="index.php">Student Records<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="#">Add New Student</a></li>
          </ul>
        </div>
          
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add New Student</h1>

          <div class="row placeholders">
          
      
    
          </div>

          <h3 class="sub-header" style="margin-bottom:50px; text-align:center;">Fill out the following information</h3>
         

        <div class="row">   
        <div class="col-md-12 ">
            
             <form action="add/insert.php"  id="student_form" method="post" >
            <div class="col-md-6">
                   
                  <h3 class="sub-header" style="margin-bottom:50px; text-align:center;">Student Info</h3>
                  
                  <!-------STUDENT FIRST NAME----->
                  <div class="form-group">
                    <label for="email">Student First Name:</label>
                    <input type="text" name="firstname" class="form-control" placeholder="eg. Kingsley" required>
                  </div>
                
                  <!-------STUDENT LAST NAME----->
                   <div class="form-group">
                    <label for="email">Student Last Name:</label>
                    <input type="text" name="lastname" class="form-control" placeholder="eg. Budali" required>
                    <span class="help-block"> This field requires personnel's surname/family name. </span>
                  </div>
                     
                   <!-------STUDENT DATE OF BIRTH----->
                   <div class="form-group">
                    <label for="date">Student Date of Birth:</label>
                    <input type="date" name="dob" class="form-control" required>
                  </div>
                
                
  
                   <!-------STUDENT PROGRAM LEVEL----->
                   <div class="form-group">
                    <label for="number">Student Program Level:</label>
                    <input type="number"  name="programlevel" class="form-control" placeholder="eg. 100" >
                  </div>
                
                    <!-------STUDENT PHONE NUMBER----->
                   <div class="form-group">
                    <label for="phone">Student Phone Number:</label>
                    <input type="text" name="studentnumber" class="form-control" placeholder="eg. 0246282549" >
                  </div>
                
                    <!-------STUDENT EMAIL----->
                   <div class="form-group">
                    <label for="email">Student Email:</label>
                    <input type="email" class="form-control" name="studentemail" placeholder="eg. kingseyb@gmail.com" >
                  </div>
                    
                   <!-------STUDENT ADDRESS----->
                   <div class="form-group">
                    <label for="address">Student Address:</label>
                       <textarea type="address" name="studentaddress" class="form-control" ></textarea>
                  </div>
                
                    <!-------STUDENT LAST NAME----->
                   <div class="form-group">
                    <label for="text">Student Postal Code:</label>
                    <input type="text" name="studentpostal" class="form-control" placeholder="eg. P.O.BOX 18 Central " >
                  </div>
                
                
                
                
                
                

                  
                
                
            </div>
            
            <div class="col-md-6">
                
                <h3 class="sub-header" style="margin-bottom:50px; text-align:center;">Kin's Information</h3>
                
                <!-------KINS FIRST NAME----->
                  <div class="form-group">
                    <label for="email">Kins' First Name:</label>
                    <input type="text" name="kinfirstname" class="form-control" >
                  </div>
                
                <!-------KINS LAST NAME----->
                  <div class="form-group">
                    <label for="email">Kins' Last Name:</label>
                    <input type="text" name="kinlastname" class="form-control">
                  </div>
                
                 <!-------KINS PHONE NUMBER----->
                   <div class="form-group">
                    <label for="phone">Kins' Phone Number:</label>
                    <input type="tel" name="kinnumber" class="form-control" >
                  </div>
                
                 <!-------KINS EMAIL----->
                   <div class="form-group">
                    <label for="email">Kins' Email:</label>
                    <input type="email" name="kinemail" class="form-control">
                  </div>
                
                 <!-------KINS RELATIONSHIP----->
                  <div class="form-group">
                    <label for="relationship">Relationship to Kin:</label>
                    <input type="text" name="kinrelation" class="form-control" placeholder="eg. father, mother,brother">
                  </div>
            </div>
             
            <div class="col-md-12">
            <button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
            </div>    
            </form>
            
            
            
            
        </div>
        </div>  
          
            
            
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
    
<?php 
    if(isset($_POST['btn-submit'])){
        
        include('database-connect.php');
        
        
            
    }    
?> 
