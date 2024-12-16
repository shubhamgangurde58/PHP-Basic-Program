<!DOCTYPE html>
<html>
<head>
	<title>Addition</title>
	<style>

		label{
			font-size: 25px;
		}
		input{
			padding: 10px;
		}
		button{
			font-size: 20px;
		}

	</style>

	<?php

			$n1="";
			$n2="";
			$r1="";
			$s="";

			if(isset($_POST['btnadd'])){

				$n1=$_POST['No1'];
				$n2=$_POST['No2'];

				$s=$_POST['sign'];

				if($s=="+"){

					$r=$n1+$n2;

				}else if($s=="-"){

					$r=$n1-$n2;

				}else if($s=="*"){

					$r=$n1*$n2;

				}else if($s=="/"){

					$r=$n1/$n2;

				}			

			}else{

				$n1="";
				$n2="";
				$r1="";

			}


		?>

</head>
<body>

	<center>
		<header><h1>Calculator</h1></header>

		<form action="" method="post">

			<label>No1 :</label>
			<input type="text" name="No1" required value="<?php echo"$n1" ?>"><br><br>
			<label>No2 :</label>
			<input type="text" name="No2" required value="<?php echo"$n2" ?>"><br><br>

			<label>Sign</label>
			<input type="text" name="sign" required value="<?php echo"$s" ?>"><br><br>
			<label>Result :</label>
			<input type="text" name="result" value="<?php echo"$r" ?>"><br><br>

			<input type="submit" name="btnadd" value="Add">
			<input type="submit" name="btnreset" value="reset">

		</form>
	</center>

</body>
</html>