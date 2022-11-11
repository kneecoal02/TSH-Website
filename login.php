<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
      .name{
    text-align: center;
    font-color:white;
    
  }
  h2{
    text-align: center;
    font-family: verdana;
    margin-left:1%;
    color:white;
    padding-top: 80px;
    
  }

  body{
background-color: #aed6dc;
  justify-content: center;
  align-items: center;
  margin-left: 30%;
  margin-top: 5%;
  height: 100vh;

}
*{
 font-family: verdana;
 box-sizing:border-box;

}
.form{
  width:500px;
  border-radius: 15px;
  padding-bottom: 15px;
 background-color: #316879;
  opacity: .9;
  margin-top: 10%;
}
input{
  display:block;
  border: 1px solid black;
  width:95%;
  padding:10px;
  margin:10px auto;
  border-radius:5px;

}
label{
  color:white;
  font-size: 18px;
  padding:10px;
}
button{
  padding:10px 15px;
  margin-left:43%;
  background-color: #aed6dc;
  color:black;
  border-radius: 5px;
}
.lbl{
float:left;
color:white;
font-size: 15px;
padding-top: 8px;
}
.check{
  position:absolute;
  right:0;
  left:-19%;

}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.img {
  width: 10%;
  height: auto;
  position: absolute;
  top:4%;
  left:45%;
}
button:hover{
      background-color: #79a7d3;
  color: white;
}

@media only screen and (min-width: 425px) {




  .col-7 {width: 58.33%;}

}

  </style>
</head>
<body class="login">
  <form class="form col-7" action="funclog.php" method="post">
  <img class="img" src = "iconn.png" >
    

    <h2>Login</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

    <label>Username</label>
    <input type="text" name="username" placeholder="Username"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" id="myInput">

    <label class="lbl" for="checkbox"> Show Password</label>
    <input class="check" type="checkbox" id="checkbox" name="checkbox" onclick="myFunction()">
    <br><br>

    <button type="submit">Login</button><br><br>
  
   

  </form>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
 
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}
</script>
</body>
</html>