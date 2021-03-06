<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con,"select ID from tbladmin where  Email='$email' and MobileNumber='$contactno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['contactno']=$contactno;
      $_SESSION['email']=$email;
     header('location:reset-password.php');
    }
    else{
      $msg="Invalid Details. Please try again.";
    }
  }
  ?>
<!doctype html>
 <html class="no-js" lang="">
<head>
    
    <title>VPMS-Registro</title>
   

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                         <h2 style="color: green">Sistema de gesti??n de aparcamiento de veh??culos</h2>
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                         <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        <div class="form-group">
                            <label>Nombre</label>
                           <input type="text" class="form-control" name="email" placeholder="Ingresa tu nombre completo" autofocus required="true">
                        </div>
                        <div class="form-group">
                            <label>Numero de documento</label>
                           <input type="text" class="form-control" name="email" placeholder="documento de identidad" autofocus required="true">
                        </div>
                        <div class="form-group">
                            <label>direccion</label>
                           <input type="text" class="form-control" name="email" placeholder="Ingresa tu direccion" autofocus required="true">
                        </div>

                        <div class="form-group">
                            <label>N??mero de m??vil</label>
                            <input type="text" class="form-control" name="contactno" placeholder="Ingresa tu N??mero de m??vil" required="true">
                        </div>
                        <div class="form-group">
                            <label>firma</label>
                           <input type="text" class="form-control" name="email" placeholder="Ingresa tu firma" autofocus required="true">
                        </div>
                        <div class="form-group">
                            <label>Correo electronico</label>
                           <input type="text" class="form-control" name="email" placeholder="Ingresa tu correo electronico" autofocus required="true">
                        </div>
                        <div class="checkbox">
                            
                            <label class="pull-right">
                                <a href="index.php">Iniciar sesi??n</a>
                            </label>

                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Registrar</button>
                       
                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
