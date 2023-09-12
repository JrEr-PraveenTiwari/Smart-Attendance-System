<?php
session_start();
error_reporting(0);

include ('navigation.php') ;

?>

	<?php 
  if ( $_SESSION['error'] ) {
    print $_SESSION['error'];
    unset( $_SESSION['error']);
}?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="pt-5">
  <h1 class="text-center">Admin Login</h1>
  
<div class="container">
                <div class="row">
                    <div class="col-md-5 mx-auto">
                        <div class="card card-body">
                                                    
                            <form id="submitForm" action="admin.php" method="post" data-parsley-validate="" data-parsley-errors-messages-disabled="true" novalidate="" _lpchecked="1"><input type="hidden" name="_csrf" value="7635eb83-1f95-4b32-8788-abec2724a9a4">
                                <div class="form-group required">
                                    <lSabel for="username">Email</lSabel>
                                    <input type="text" class="form-control text-lowercase" id="username" name="email" value="" required="required">
                                </div>                    
                                <div class="form-group required">
                                    <label class="d-flex flex-row align-items-center" for="password">Password </label>
                                    <input type="password" class="form-control"  id="password" name="password" value="" required="required">
                                </div>
                                <div class="form-group mt-4 mb-4">
                                  
                                </div>
                                <div class="form-group pt-1">
                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                </div>
                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- partial -->
  
</body>
</html>
