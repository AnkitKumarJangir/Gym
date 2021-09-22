
<?php
include('config.php')
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

    <title>Antil Fitness</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
      <li class="">
        <a class="nav-link" href="indexx.php">Home</a>
      </li>
      <li class="nav-item active">
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



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
    <table> <tr>
                <td align="right" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="right" valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
                      <tr></tr>
                      <tr>
                        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td align="left" valign="top" class="gray12_txt"><table width="100%" border="0" cellpadding="1" cellspacing="1">
                              <tr>
                                <td colspan="4" align="left" valign="top"><p><strong>Antil Fitness - Packages</strong></p></td>
                                </tr>
                              <tr>
                                <td width="25%" align="left" valign="top"><strong>Duration&nbsp; </strong></td>
                                <td width="25%" align="center" valign="top"><strong>General</strong></td>
                                
                                
                                </tr>
                              <tr>
                                <td width="522"><strong>Monthly&nbsp; </strong></td>
                                <td align="center" id="ms" valign="top"><?php 

              $sql ="SELECT mon FROM packages";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo $row["mon"];
                      }
                }
              else
              {
                echo "0 results";
              }
            ?> </td>
                                                                
                                </tr>
                              <tr>
                                <td width="522"><strong>Quarterly&nbsp; </strong></td>
                                <td align="center" valign="top">
                                  <?php 

              $sql ="SELECT qua FROM packages";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo $row["qua"];
                      }
                }
              else
              {
                echo "0 results";
              }
            ?>
                                </td>
                                
                             
                                </tr>
                              <tr>
                                <td width="522"><strong>Half-Yearly</strong></td>
                                <td align="center" valign="top">
                          <?php 

              $sql ="SELECT half FROM packages";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo $row["half"];
                      }
                }
              else
              {
                echo "0 results";
              }
            ?></td>
                               
                                
                                </tr>
                              <tr>
                                <td width="522"><strong>Yearly</strong></td>
                                <td align="center" valign="top">            <?php 

              $sql ="SELECT year FROM packages";
              $result = mysqli_query($conn,$sql);
              if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo $row["year"];
                      }
                }
              else
              {
                echo "0 results";
              }
            ?></td>
                                
                               
                                </tr>
                              </table></td>
                            </tr>
                          </table>
     
       <p><h6><b>Antil Fitness</b> is having highly qualified team of trainers, they are widely acknowledged as being among the industry's finest and take enormous pride in assisting members wherever they are needed. All are fully accredited on the Exercise Professionals Register and are, of course, insured to deliver some of the most advanced training. They can focus clearly on your goals and pointedly be on hand to ensure you reach them.</h6 ><br> <h3>Note:</h3>
» 	All Rates are in Indian Rs.<br>
» 	General Rates are applicable for Per Person Bases.<br>

   
    </div>


 <div class="container">
      <!-- Example row of columns -->
  
      </div>


      <hr>

      <footer>
        <p><center>&copy;<b>Antil Fitness</b></center></p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="boot/js/bootstrap.min.js"></script>
    <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <SCRIPT src="boot/js/dialog.js" type="text/javascript"></SCRIPT>
<script type="text/JavaScript" src="boot/js/sha512.js"></script> 
        <script type="text/JavaScript" src="boot/js/forms.js"></script> 
      
  </body>
</html>
