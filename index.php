<?php 
include('./vendor/autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product DB</title>
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
</head>

<body class="main">
<nav
        class="
          navbar
          nav-glass
          navbar-light navbar-expand-md
          justify-content-center
        "
      >
        <div class="container-fluid">
          <img
            class="navbar-brand d-flex w-10 me-auto"
            src="./img/logotxt.png"
            alt="logotxt"
          />
         
        </div>
      </nav>

  <main class="glass">
  <section class="sec-1">
  <div class="hero-prof">
<form method="post">

  <div id="d1">
  <h1>Submit New Entry</h1>

  <table >
  <tr>
    <td > PRODUCT ID</td><td><input type="text" required name="Product_id"></td>

  </tr>

  <tr>
    <td > PRODUCT NAME</td><td><input type="text" required name="Product_name"></td>

  </tr>

  <tr>

    <td >PRODUCT DESCRIPTION</td><td><input type="text" required name="Product_description"></td>
    </tr><tr>
    <td>PRODUCT PRICE </td><td><input type="text" required name="Product_price"></td>

  </tr>

  </table>

</div>


  <button class="btn" type="submit" name="Submit" value="Add">Submit Order</button>
  <button class="btn" type="button" > <a href=".">Refresh</a> </button>
  
  </form>
</div>
 
<div class="hero-cont">
<h1>All Entries</h1>


<table>

    <tr>

      <th>Product ID</th>

      <th> Product name</th>

      <th>Product Decription</th>

      <th> Product price</th>

    </tr>

    <?php

    $con=mysqli_connect("bnsprr73gakjxfffddtv-mysql.services.clever-cloud.com:3306","uqpszcjpicfuodyl","lv62kE1ySPAz8hKeTUYd","bnsprr73gakjxfffddtv");

    if($con)

    {

      $q="SELECT * FROM product";

      $r=mysqli_query($con,$q);

     

      while($f=mysqli_fetch_array($r))

      {

        echo "<tr>";
            echo "<td>".$f['Product_id']."</td>";
            echo "<td>".$f['Product_name']."</td>";
            echo "<td>".$f['Product_description']."</td>";
            echo "<td>".$f['Product_price']."</td>";

      }

    }

    ?>

  </table>


  <?php

  mysqli_close($con);

  

  ?>

  <?php
  $con=mysqli_connect("bnsprr73gakjxfffddtv-mysql.services.clever-cloud.com:3306","uqpszcjpicfuodyl","lv62kE1ySPAz8hKeTUYd","bnsprr73gakjxfffddtv");

if(isset($_POST['Submit'])) {  
  $pid = $_POST['Product_id'];  
  $pname = $_POST['Product_name'];
  $pcode = $_POST['Product_description'];
  $pprice = $_POST['Product_price'];
          
  // if all the fields are filled (not empty)             
  //insert data to database
  $result = mysqli_query($con, "INSERT INTO product (Product_id,Product_name,Product_description,Product_price) VALUES('$pid','$pname','$pcode','$pprice')");
  if($result){

    header("Location: index.php");

  }else{

    echo "";

  }
  
  }

   ?>
</div>
 

 

</fieldset><br><br><br><br>

</fieldset>

 
  </main>
</section>
</body>

</html>