<!DOCTYPE html>
<html lang="en-LV">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>task1</title>
<link rel="stylesheet" type="text/css" href="CSS/taskcss.css">
</head>
<body>
<section id="left">
	<header>
		<img src="\img\logo_pineapple.jpg" id="logo">
			<nav>
				<a href="#">About</a>
				<a href="#">How it works</a>
				<a href="#">Contact</a>
			</nav>
	
	</header>
	<h1>Subscribe to newsletter</h1>
	<h2>Subscribe to our newletter and get 10% discount on pineapple glasses </h2>

<form>
	<label for="email">
		<input type="email" id="email_addr" name="email" placeholder="Type your email address here..." required="me@me.com" ></label>
		<input type="image"src="\img\ic_arrow.png" id="arrow" alt="submit" value="Thanks for subcribing!" onclick="return check();"><br>

		
		<script type="text/javascript">
		function check() {
      var email = document.getElementById('email_addr');
      
     
 	 		if ( email=1) {
 	 			window.alert("Thanks for subcribing!");
        return true;
    }
       
}
	</script>

</form>
<div id="box">
	<input type="checkbox" id="checkbox" value="checkmark">
	<p> I agree to <a herf="#" id="term">term of service</a> </p>
	
</div>

<footer>
	<div class="vl" ></div>
	<ul>
		<ol><a herf="#"><img src= "C:\Users\Agnese\Desktop\MAGEBIT\img\ic_facebook.svg" id="fb" alt="facebook"></a></ol>
		<ol><a herf="#"><img src= "C:\Users\Agnese\Desktop\MAGEBIT\img\ic_instagram.svg" id="in" alt="instagram"></a></ol>
		<ol ><a herf="#"><img src= "C:\Users\Agnese\Desktop\MAGEBIT\img\ic_twitter.svg" id="tw" alt="twitter"></a></ol>
		<ol><a herf="#"><img src= "C:\Users\Agnese\Desktop\MAGEBIT\img\ic_youtube.svg" id="yu" alt="youtube"></a></ol>
	</ul>
	
</footer>
</section>

    <section id="right">
  	<img src="C:\Users\Agnese\Desktop\MAGEBIT\img\image_summer.png" id="summer">
</section>



</body>
</html>
