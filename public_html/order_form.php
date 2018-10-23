<!-- Katelyn Mangold -->
<!--Order Form -->
<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

	<title>Order Now!</title>
 </head>
 
<body class="p-3 mb-2 bg-warning text-black"></div>

<?php include '../global/navigation.php'; ?>

<h2 id="centertext">Order your Desserts Today</h2>
<form action="action_page.php"> 
	First name:<br>
  	<input type="text" name="firstname" value="">
  	<br>
  	Last name:<br>
  	<input type="text" name="lastname" value="">
  	<br>
  <input type="radio" name="bakery item" value="cake $10.00"> Cake $10.00<br>
  <input type="radio" name="bakery item" value="cookie $2.50"> Cookie $2.50<br>
  <input type="radio" name="bakery item" value="cupcake $4.50"> Cupcake $4.50<br>
  <input type="radio" name="bakery item" value="bagels $3.75"> Bagels $3.75<br>
  <input type="radio" name="bakery item" value="muffins $2.50"> Muffins $2.50<br>
  <input type="radio" name="bakery item" value="pie $7.00"> Pie $7.00<br>
  Quantity:<br>
  <input type="text" name="quantity" value="">
  <br>
  Phone Number:<br>
  <input type="text" name="phone number" value="">
  <br>
  <input type="submit" value="Submit">
</form> 

<?php include '../global/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>