 <?php
 include('config.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Antil fitness</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <style>
    body{
        background-image: url(img/back.jpg);
        background-size:cover;
      }
      hr{
        background: white;  
      }

    .contact-form{
      background:rgba(0,0,0, .3);
      color:white;
      margin-top: 100px;
      padding: 20px;
      box-shadow: 0px 0px 10px 3px grey;
    }
 </style>
</head>
<body>
  <header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="indexx.php">Antil Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li>
        <a class="nav-link" href="indexx.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="packages.php">Packages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="facilities.php">Facilities</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>

</header>



<div class="container contact-form">
  <h1>Contact form</h1>
  <hr>

  <div class="row">
   
       <div class="col-md-6">
        <address>Gali no-6 Loharu-road, Pilani, Rajasthan 333031</address>
        <p>Email:- test@email.com</p>
        <p>Phone:- 34563463434</p>
  
       </div>

       <div class="col-md-6">
          <form method="POST" action="contact.php">
         <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" class="form-control">
         </div>

         <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
         </div>

         <div class="form-group">
          <label>Massage</label>
          <textarea  class="form-control" name="massage" rows="7"></textarea>
         </div>

         <div class="form-group">
          <button class="btn btn-primary btn-block" name="send">Send</button>
         </div>
          </form>
       </div>

    </div>

</div>
<?php
if(isset($_POST['send']))
{
  $Name= $_POST['name'];
  $Email = $_POST['email'];
  $Massage = $_POST['massage'];

  $mess= "INSERT into member(name,email,massage) values('$Name','$Email','$Massage')";
  if(mysqli_query($conn, $mess)){
    echo '<script> alert("message successfully.")</script>';
} else{
    echo "error";
}
}


?>
<br>
<br>
<br>

<footer>
<center style="color: white;">
  &copy;<b>Antil Fitness</b>
</center>
</footer>


</body>
</html>