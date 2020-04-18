<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<meta name="google-signin-scope" content="profile email">
		<meta name="google-signin-client_id" content="7570494244-tsckph71l2froefllg4a14lj71gq9n62.apps.googleusercontent.com">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
	</head>
	<body>
	
	<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
	<p id="demo" class="justify-content-center align-items-center"></p>
	<h1 class="text-uppercase text-center">Your Favourite Characters Catalog</h1>
	<div class="row justify-content-center align-items-center">
		<div class="card">
		  <div class="card-body">
			<h4 class="card-title">Marvel Comic</h4>
			<p class="card-text">Know more about your favourite Marvel Characters.</p>
			<a href="marvel.php" class="btn btn-info">Explore More</a>
		  </div>
		</div>
		<div class="card">
		  <div class="card-body">
			<h4 class="card-title">Harry Potter</h4>
			<p class="card-text">Know more about your favourite Harry Potter Characters.</p>
			<a href="harryPotter.php" class="btn btn-info">Explore More</a>
		  </div>
		</div>
	</div>
	
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        document.getElementById("demo").innerHTML = 'Full Name: ' + profile.getName() + "<br>";
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
		document.getElementById("demo").innerHTML +=  "Email: " + profile.getEmail() + "<br>";
        document.getElementById("demo").innerHTML += "<img src = '" + profile.getImageUrl() + "'>";
        
        

        // The ID token to pass to the backend to keep id safe
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
	</body>
</html>
<!-- https://www.google.com/url?sa=i&url=https%3A%2F%2Fholrmagazine.com%2Fharry-potter-audible-ca%2F&psig=AOvVaw1fZx5uhs1G3cgNHDtPW5cj&ust=1587227798186000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMCl1rHz7-gCFQAAAAAdAAAAABAD -->
<!-- https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.radiotimes.com%2Fnews%2Ffilm%2F2020-04-08%2Fmarvel-movies-order%2F&psig=AOvVaw2A2JHDHDXr7IK0zUSG7jRA&ust=1587227721647000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJDwqsfz7-gCFQAAAAAdAAAAABAD -->