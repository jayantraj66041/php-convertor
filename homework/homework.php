<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework</title>
	<link href="bootstrap.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="number" class="form-control" name="input1" placeholder="Check even/odd">
							</div>
						
						<input type="submit" class="btn btn-outline-success btn-block" name="button1" value="check">
						</form>
					</div>
					<div class="card-footer">
						<?php
							if(isset($_POST["button1"])){
								$input1 = $_POST["input1"];
								if ($input1%2==0){
									echo $input1 . " is an even integer.";
								}
								else {
									echo $input1 . " is an odd integer.";
								}
							}
						?>
					</div>	
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="number" class="form-control" name="input2" placeholder="Check +ve/-ve">
							</div>
						
						<input type="submit" class="btn btn-block btn-outline-success" name="button2">
						</form>
					</div>
					<div class="card-footer">
						<?php
							if (isset($_POST["button2"])){
								$input2 = $_POST["input2"];
								if ($input2 < 0){
									echo $input2 . " is a negative number.";
								}
								elseif ($input2 > 0){
									echo $input2 . " is a positive number.";
								}
								else{
									echo $input2 . " is nither negative nor positive. It's zero.";
								}
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="number" placeholder="Enter the 1st no." class="form-control" name="inputa3">
							</div>
							<div class="form-group">
								<input type="number" placeholder="Enter the 2nd no." class="form-control" name="inputb3">
							</div>
							<div class="form-group">
								<input type="number" placeholder="Enter the 3rd no." class="form-control" name="inputc3">
							</div>
							<div class="form-group">
								<input type="number" placeholder="Enter the 4th no." class="form-control" name="inputd3">
							</div>
							<div class="form-group">
								<input type="number" placeholder="Enter the 5th no." class="form-control" name="inpute3">
							</div>
							<input type="submit" value="Find the average value" name="button3" class="btn btn-outline-success btn-block">
						</form>
					</div>
					<div class="card-footer">
						<?php
							if (isset($_POST["button3"])){
								$inputa3 = $_POST["inputa3"];
								$inputb3 = $_POST["inputb3"];
								$inputc3 = $_POST["inputc3"];
								$inputd3 = $_POST["inputd3"];
								$inpute3 = $_POST["inpute3"];
								echo "The mean value of $inputa3, $inputb3, $inputc3, $inputd3 and $inpute3 is ". ($inputa3+$inputb3+$inputc3+$inputd3+$inpute3)/5;
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter state name" name="input4">
							</div>
							<input type="submit" class="btn btn-outline-success btn-block" name="button4" value="Search Capital">
						</form>
						
					</div>
					<div class="card-footer">
						<?php
							if (isset($_POST["button4"])){
								$input4 = $_POST["input4"];
								if ($input4=="Andhra Pradesh"){
								echo "capital of ".$input4 ." is Hydrabad";
								}
								elseif ($input4=="Arunachal Pradesh"){
									echo "capital of ".$input4 ." is Itanagar";
								}
								elseif ($input4=="Assam"){
									echo "capital of ".$input4 ." is Dispur";
								}
								elseif ($input4=="Bihar"){
									echo "capital of ".$input4 ." is Patna";
								}
								elseif ($input4=="Chhattisgarh"){
									echo "capital of ".$input4 ." is Raipur";
								}
								elseif ($input4=="Goa"){
									echo "capital of ".$input4 ." is Panaji";
								}
								elseif ($input4=="Gujarat"){
									echo "capital of ".$input4 ." is Gandhinagar";
								}
								elseif ($input4=="Haryana"){
									echo "capital of ".$input4 ." is Chandigarh";
								}
								elseif ($input4=="Himachal Pradesh"){
									echo "capital of ".$input4 ." is Shimla";
								}
								elseif ($input4=="Jammu & Kashmir"){
									echo "capital of ".$input4 ." is Srinagar";
								}
								elseif ($input4=="Jharkhand"){
									echo "capital of ".$input4 ." is Ranchi";
								}
								elseif ($input4=="Karnataka"){
									echo "capital of ".$input4 ." is Bangalore";
								}
								elseif ($input4=="Kerala"){
									echo "capital of ".$input4 ." is Thiruvananthapuram";
								}
								elseif ($input4=="Madhya Pradesh"){
									echo "capital of ".$input4 ." is Bhopal";
								}
								elseif ($input4=="Maharashtra"){
									echo "capital of ".$input4 ." is Mumbai";
								}
								elseif ($input4=="Manipur"){
									echo "capital of ".$input4 ." is Imphal";
								}
								elseif ($input4=="Meghalaya"){
									echo "capital of ".$input4 ." is Shillong";
								}
								elseif ($input4=="Mizoram"){
									echo "capital of ".$input4 ." is Aizawl";
								}
								elseif ($input4=="Nagaland"){
									echo "capital of ".$input4 ." is Kohima";
								}
								elseif ($input4=="Odisha"){
									echo "capital of ".$input4 ." is Bhubaneshwar";
								}
								elseif ($input4=="Punjab"){
									echo "capital of ".$input4 ." is Chandigarh";
								}
								elseif ($input4=="Rajasthan"){
									echo "capital of ".$input4 ." is Jaipur";
								}
								elseif ($input4=="Sikkim"){
									echo "capital of ".$input4 ." is Gangtok";
								}
								elseif ($input4=="Tamil Nadu"){
									echo "capital of ".$input4 ." is Channai";
								}
								elseif ($input4=="Telangana"){
									echo "capital of ".$input4 ." is Hyderabad";
								}
								elseif ($input4=="Tripura"){
									echo "capital of ".$input4 ." is Agartala";
								}
								elseif ($input4=="Uttarakhand"){
									echo "capital of ".$input4 ." is Dehradun";
								}
								elseif ($input4=="Uttar Pradesh"){
									echo "capital of ".$input4 ." is Lucknow";
								}
								elseif ($input4=="West Bengal"){
									echo "capital of ".$input4 ." is Kolkata";
								}
								else{
									echo "Invalid state.";
								}
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="number" placeholder="Enter birth year" class="form-control" name="input5">
							</div>
							<input type="submit" class="btn btn-outline-success btn-block" value="Find your age" name="button5">
						</form>
						
					</div>
					<div class="card-footer">
						<?php
							if (isset($_POST["button5"])){
								$input5 = $_POST["input5"];
								echo "You are ". (2018 - $input5)." years old.";
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<form action="homework.php" method="post">
							<div class="form-group">
								<input type="number" class="form-control" placeholder="Enter any no." name="input6">
							</div>
							<input type="submit" class="btn btn-outline-success btn-block" value="Find Table" name="button6" data-toggle="modal" data-target="#jai">
						</form>
					</div>
					<div class="card-footer">
						<?php
						if (isset($_POST["button6"])){
							$input6 = $_POST["input6"];
							for ($i = 1; $i <= 10; $i++){
								echo $input6 ." X ". $i ." = ".$input6*$i."<br>";
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>