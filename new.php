

<?php
include('config.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
			background:rgba(0,0,0, .6);
			color:white;
			margin-top: 100px;
			padding: 20px;
			box-shadow: 0px 0px 10px 3px grey;
		}
   </style>
</head>

<?php
if(isset($_POST['submit']))
{
	$mon = $_POST['mon'];
	$qua = $_POST['qua'];
	$half = $_POST['half'];
	$year = $_POST['year'];
	
	$sql ="UPDATE Packages SET mon = '$mon', half = '$half', year = '$year', qua = '$qua'";
  
	if (mysqli_query($conn,$sql))
	{
		echo '<script> alert("record updated succesfully")</script>';
	}
	else
	{
		echo "error";
	}
}

  ?>
<body>
<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="indexx.php">Antil Fitness</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="">
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
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>    
    </ul>
    
  </div>  
</nav>

</header>


<div class="col-md-6">
  <center><h3>Welcome To Update The Packages</h3></center>
       		<form method="POST" action="">
            <div class="form-group">
         	    <label>Monthly:</label>
         	    <input type="text" name="mon" class="form-control">
            </div>

         <div class="form-group">
         	<label>Quarterly:</label>
         	<input type="text" name="qua" class="form-control">
         </div>

         <div class="form-group">
         	<label>Half-Yearly:</label>
         	<input type="text" name="half" class="form-control">
         </div>

         <div class="form-group">
         	<label>yearly:</label>
         	<input type="text" name="year" class="form-control">
         </div>


         <div class="form-group">
         	<button class="btn btn-primary btn-block" name="submit">Update</button>
         </div>
         	</form>
</div>

    <table>   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Massage</th>
    </tr>
  </thead>
  <tbody>

    <?php
$sql = "Select * from member";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))

  { echo "<tr><td>{$row['id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['email']}</td>
              <td>{$row['massage']}</td>
          </tr>";
     
  }echo "</table>";
  
}
else
{
  echo " 0 results";
}
mysqli_close($conn);


?>
   
  </tbody>
</table>
                           
    </table>


</div>

</body>


</html>