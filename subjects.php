<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Subject</title>
<style>
	body{
background-color: #aed6dc;
  margin-left: 12%;
  margin-top: 5%;
  height: 100vh;
}
*{
 font-family: verdana;
 box-sizing:border-box;

}
.form1{
  width:820px;
  padding-bottom: 55px;
  background-color: #316879;
  opacity:.9;
  align-items: left;
  padding-top: 15px;
  margin-left:-10%;
     top: 13%;
  position: absolute;


}
.form2{
  width:300px;
  padding-bottom: 15px;
  background-color: #316879;
  opacity:.9;
  align-items: left;
  padding-top: 15px;
  left:68%;
  top: 13%;
  position: absolute;
  height:570px;

}
h2{
    text-align: center;
    color:white;
    padding-top: 2px;
  }

  input{
  display:block;
  border: 1px solid black;
  width:80%;
  padding:10px;
  margin:10px auto;
  border-radius:5px;
  margin-left: 10%;
  

}
label{
  color:white;
  font-size: 18px;
  padding:10px;
  margin-left: 7%;
}

.btn{
  padding:10px 15px;
  margin-left:40%;
   background-color: #4CAF50;
  color:white;
  border-radius: 5px;
  border:1px solid black;

	}
.btn:hover{
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
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

}
	
</style>
</head>
<body>
<ul>
	<li><a href="register.php">Register</a></li>
	<li><a href="enroll.php">Enroll</a></li>
  <li><a class="active" href="subjects.php">Add Subjects</a></li>
   <li class="logout"><a  href="login.php">Logout</a></li>
 
</ul>
<form class="form1 col-7" action= "funsubj.php" method="post">
	<h2>Add Subjects</h2>
	<label>Subject Code</label>
	<input type="text" name="scode" id="scode"><br>
	<label>Subject Name</label>
	<input type="text" name="sname" id="sname"><br>
	<label>Teacher</label>
	<input type="text" name="teacher" id="teacher" readonly><br>
	<label>Teacher's ID</label>
	<input type="text" name="tid" id="tid" readonly><br>
	<button type="submit" class="btn">Add</button>

</form>
<form class="form2 col-3">
	<h2>Teacher's Lists</h2>
		<div id="scroll">

		</div>
	</form>



<script type="text/javascript">
	<?php
	$query = "SELECT * FROM accounts WHERE status='Teacher'";
		$result = mysqli_query($conn, $query);
		$resultcheck= mysqli_num_rows($result);
		
		$fullname =array();
		$tid=array();
		for($sloop = 0; $sloop < $resultcheck; $sloop++){
			$row = mysqli_fetch_array($result);
			array_push($fullname, $row['fullname']);
			array_push($tid, $row['id']);
				

			}

		?>
		var tname = [<?php echo '"'.implode('","', $fullname).'"' ?>];
		var tsid = [<?php echo '"'.implode('","', $tid).'"' ?>];
		var btn_y_pos = 200;
		tname.forEach(myFunction);
		function myFunction(item,index){
		var name_btn = document.createElement("BUTTON");
		name_btn.type="button";
		name_btn.innerHTML = item;
		name_btn.id="name_btn";
		name_btn.style.top = btn_y_pos + 'px';
		btn_y_pos += 50;
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
					left:72%;
					background-color: #4CAF50;
					box-shadow: 5px 5px #6883bc;
					color:white;

				

  				}
  				#name_btn:hover{
				background-color: #79a7d3;
				color: white;
				}
  			`;
  			name_btn.onclick= function(){
  				document.getElementById('teacher').value = item;
				document.getElementById('tid').value = tsid[index];
  			}
		document.body.appendChild(name_btn);
		document.head.appendChild(style);

		}

		

</script>

	</body>
</html>