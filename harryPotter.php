<?php 

	if(isset($_GET["srchbtn"])){
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		
		//$character = $_GET["character"];
		$url = 'https://www.potterapi.com/v1/characters/?key=%242a%2410%24HfeU8vhY%2FKVAJpRphOlcP.GQ2oxocEygcB1rMozyYCbIKc1lGrv2W';
		curl_setopt($curl, CURLOPT_URL, $url);

		$result = json_decode(curl_exec($curl), true);
		// var_dump($result[0]['name']);
		
		for($i = 0; $i <= sizeof($result) ; $i++){
			var_dump($result[$i]['name']);
				if($result[$i]['name'] == $_GET['character'] ){
					echo '<script type="text/javascript">window.onload = function() { 
	
						document.getElementById("charName").innerHTML = "' . $result[$i]['name'] . '"; 
						document.getElementById("charHouse").innerHTML = "' . 'House: '. $result[$i]['house'] . '"; 
						document.getElementById("charRole").innerHTML = "' . 'Role: '. $result[$i]['role'] . '"; 
						document.getElementById("charSpecies").innerHTML = "' . 'Species: '. $result[$i]['species'] . '"; 
						document.getElementById("charSchool").innerHTML = "' . 'School: '. $result[$i]['school'] . '"; 
						
					}</script>';
				 }
			}
		//var_dump($result);
	}
	
?>
<html>
	<head>
		<title>Harry Potter</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body id="potterpage">
		<div class="row justify-content-center align-items-center">
			<a href="index.php" class="btn btn-info">Back to Home</a>
			<a href="harryPotter.php" class="btn btn-info">Browse More</a>
		</div>
		<div class="row justify-content-center align-items-center">
			<form class="form-inline my-2 my-lg-0" method="get">
			  <input class="form-control mr-sm-2" type="text" placeholder="Search" name="character">
			  <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="srchbtn">Search</button>
			</form>
		</div>
		<div id="potterContent">
			<div class="list-group">
				<div id="charName" class="list-group-item list-group-item-action bg-dark text-danger"></div>
				<div id="charRole" class="list-group-item list-group-item-action"></div>
				<div id="charHouse" class="list-group-item list-group-item-action"></div>
				<div id="charSpecies" class="list-group-item list-group-item-action"></div>
				<div id="charSchool" class="list-group-item list-group-item-action"></div>
			</div>
		</div>
	</body>
</html>
