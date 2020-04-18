<?php 
	
  if (isset($_GET['marvelSearch'])) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $name_to_search = htmlentities(strtolower($_GET['character'])); // HuLk == hulk

    $ts = time();
    $public_key = '617abc63cb0cfd40c43cfcffb30f2076';
	$private_key = '1d390e943f63a58aa9aac9278ef713e08a81760d';
    $hash = md5($ts . $private_key . $public_key);

    $query = array(
      "name" => $name_to_search, // ""
      "orderBy" => "name",
      "limit" => "20",
      'apikey' => $public_key,
      'ts' => $ts,
      'hash' => $hash,
    );

    $marvel_url = 'https://gateway.marvel.com:443/v1/public/characters?' . http_build_query($query);

    curl_setopt($curl, CURLOPT_URL, $marvel_url);

    $result = json_decode(curl_exec($curl), true);
	//var_dump($result->data);
	$name = $result['data']['results'][0]['name'];
	$thumbnail = $result['data']['results'][0]['thumbnail']['path'] . '.' . $result['data']['results'][0]['thumbnail']['extension'] ;
	$desc = $result['data']['results'][0]['description'];
	
	echo '<script type="text/javascript">window.onload = function() { 
	
		document.getElementById("marvelcharName").innerHTML = "' . $name . '"; 
		document.getElementById("charImage").src = "' . $thumbnail . '"; 
		document.getElementById("charDesc").innerHTML = "' . $desc . '"; 
		
	}</script>';
	//var_dump($result);
		
    curl_close($curl);
   
  } 

?>

<html>
	<head>
		<title>Marvel</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body id="marvelpage">
		<div class="row justify-content-center align-items-center">
			<a href="index.php" class="btn btn-info">Back to Home</a>
			<a href="marvel.php" class="btn btn-info">Browse More</a>
		</div>
		<div class="row justify-content-center align-items-center">
			<form class="form-inline my-2 my-lg-0" method="get">
			  <input class="form-control mr-sm-2" type="text" placeholder="Search" name="character">
			  <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="marvelSearch">Search</button>
			</form>
		</div>
		<div id="content">
			<h2 id="marvelcharName" class="text-uppercase text-center"></h2>
			<div class="row justify-content-center align-items-center">
				<img class="col-sm-4" id="charImage">
				<div class="col-sm-4" id="charDesc"></div>
			</div>
		</div>
	</body>
</html>