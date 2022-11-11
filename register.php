<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up</title>
  <style>
body{
	background-color: #aed6dc;
}
*{
 font-family: verdana;
 box-sizing:border-box;

}
 h2{
    text-align: center;
    font-family: verdana;
    color:white;
    padding-top: 10px;
  }
  .form1{
  width:700px;
  padding-bottom: 15px;
  background-color: #316879;
  opacity:.9;
  align-items: left;
  margin-left: 7%;
   top: 13%;
  position: absolute;
}
.form2{
  width:320px;
  height:727px;
  padding-bottom: 15px;
  background-color: #316879;
  opacity:.9;
  padding-top: 15px;
  left:68%;
  top: 13%;
  position: absolute;

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
  margin-left:40%;
   background-color: #4CAF50;
  color:white;
  border-radius: 5px;
  border:1px solid black;
}

.list{
  display:block;
  width:60px;
  padding:10px;
  color:white;
  position:absolute;
  left:21%;
  top:0;


}
button:hover{
	background-color: #79a7d3;
  color: white;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #316879;
  position: absolute;
  top:0%;
  left:0;
  width:100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #4CAF50;
}

.active {
  background-color: #4CAF50;
}

  #scroll {
  margin-left: 10%;
  height: 400px;
  overflow-y: auto;
  margin-right: 2%;
}

.logout{
	position: absolute;
	left:90%;
}
@media only screen and (min-width: 425px) {
  /* For desktop: */

  .col-3 {width: 25%;}

  .col-7 {width: 58.33%;}

}
​​​

  </style>
</head>
<body>
<ul>
<li><a class="active" href="register.php">Register</a></li>
<li><a  href="enroll.php">Enroll</a></li>
  <li><a  href="subjects.php">Add Subjects</a></li>
  <li class="logout"><a  href="login.php">Logout</a></li>
  

 
</ul>
 	<form class="form1 col-7" action="funcsign.php" method="post">
		<h2> Create Student's Account</h2>
		<label>Username</label>
		<input type="text" name="user_name" placeholder="Username" required/><br>
		<label>Password</label>
		<input type="text" name="pass" placeholder="Password"required/><br>
		<label>Fullname</label>
		<input type="text" name="fullname" placeholder="Fullname"required/><br>
		<label>Status</label>
		<input type="text" name="stat" placeholder="Status"required/><br>
		<label>Contact Number</label>
		<input type="text" name="contact" placeholder="Contact Number"required/><br>
		<label>Address</label>
		<input type="text" name="addr" placeholder="Address"required/><br>
		<button type="submit">Submit</button>
	</form> 
	<form class="form2 col-3">
		<h2 > Student's Lists</h2>
			<div id="scroll">

		</div>
</form>

 	
	<script type='text/javascript'>

		<?php 
		$query = "SELECT * FROM accounts WHERE status = 'Student'";
		$result = mysqli_query($conn, $query);
		$resultcheck= mysqli_num_rows($result);
		$xxx =array();
		$info=array();
		$cnt=array();
		$addrs=array();
		$idss=array();
		for($sloop = 0; $sloop < $resultcheck; $sloop++){
			$row = mysqli_fetch_array($result);
			array_push($xxx, $row['fullname']);
			array_push($info, $row['username']);
			array_push($cnt, $row['cntctnum']);
			array_push($addrs, $row['address']);
			array_push($idss, $row['id']);
			

			}

		?>


		var names = [<?php echo '"'.implode('","', $xxx).'"' ?>];
		var ids = [<?php echo '"'.implode('","', $info).'"' ?>];
		var num = [<?php echo '"'.implode('","', $cnt).'"' ?>];
		var add = [<?php echo '"'.implode('","', $addrs).'"' ?>];
		var studsid = [<?php echo '"'.implode('","', $idss).'"' ?>];
		var btn_y_pos = 180;
		names.forEach(myFunction);
		function myFunction(item, index) {
			var name_btn = document.createElement("BUTTON");
			name_btn.type="button";
			name_btn.innerHTML = item;
			name_btn.id="name_btn";
			name_btn.style.top = btn_y_pos + 'px';
			btn_y_pos += 50
			 var style = document.createElement('style');
  			style.innerHTML = `
  				#name_btn {
  					width:15%;
  					font-family: sans-serif;
 					display:block;
  					border: 1px solid black;
  					padding:10px;
  					border-radius:5px;
					position:absolute;
					left:32%;
					background-color: #4CAF50;
					box-shadow: 5px 5px #6883bc;
					color:white;

				

  				}
  				#name_btn:hover{
				background-color: #79a7d3;
				color: white;
				}
  			`;

			name_btn.onclick = function() {
				window.location.href="enroll.php";
				localStorage.setItem("stored", item);
				localStorage.setItem("idd", ids[index]);
				localStorage.setItem("cc", num[index]);
				localStorage.setItem("aa", add[index]);
				localStorage.setItem("students_id", parseInt(studsid[index]));


				//(this.innerHTML + ids[index])
			

		}
			

			document.body.appendChild(name_btn);
			document.head.appendChild(style);
		}

	</script>
</body>
</html>

