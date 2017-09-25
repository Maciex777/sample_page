<?php
    $existing  = "This is just a sample page";
    $sparta = "This is Sparta!!!";
    $strawberries = "Unleash the frozen strawberries!!!";
    $hello = "Just wanted to say hello!";
    if (@$_GET['zmienna']) {
      $output = $sparta;
	  $color = 'red';
    } else if (@$_GET['zmienna-dwa']) {
	  $output = $strawberries;	
	  $color = 'pink';
	} else if (@$_GET['zmienna-trzy']) {
	  $output = $hello;	
	  $color = 'blue';
    } else {
      $output = $existing;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SamplePack</title>
	<link href="assets/css/style.css" type="text/css" rel="stylesheet">
	<link href="assets/css/fontello.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script>
	//wysłanie formularza bez przeładowania strony i wyświetlenie komunikatów w miejsce formularza
      $(function () {

        $('form').on('submit', function (event) {

          event.preventDefault();

          $.ajax({
            type: 'post',
            url: 'post.php',
            data: $('form').serialize(),
            success: function(result){
			  $("form").html(result);
            }
          });

        });

      });
    </script>
</head>

<body>
	<div class="content">
		<div id="top-line"></div>
		<nav>
			<div class="topnav" id="myTopnav">
				<a href="#" class="nav-items"><span>Home</span></a>
				<a href="#" class="nav-items"><span>Products</span></a>
				<a href="#" id="logo-box"><img id="logo" src="assets/images/sample-pack.png" alt="sample&amp;pack"/></a>
				<a href="#" class="nav-items"><span>About us</span></a>
				<a href="#" class="nav-items"><span>Contact</span></a>
				<a href="javascript:void(0);" class="icon" id="menu"><img src="assets/images/icon-hamburger.svg" alt="menu"/></a>
			</div>
		</nav>
		
		<div class="jumbotron">
			<h1 style="color: <?php echo $color; ?>"><?php echo $output ?></h1>
			<button id="push-button">push the button</button>
		</div>
		
		<div class="articles-section">
		  <div class="text-block">
				<h3>A heading title</h3>
				<img class="img" src="assets/images/picture.png" alt="image">
				<p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt enim nulla, at scelerisque quam interdum in.<br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget lorem efficitur, commodo massa eu, efficitur libero. Nam lobortis elementum nisl at accumsan. Fusce id erat vel est rutrum dignissim. Nullam imperdiet vulputate ligula, a rutrum nisl ultrices vitae. Sed id tincidunt tortor. Nam ultrices sapien eget risus dapibus, non ornare odio aliquam.
									Nulla vestibulum purus sed tellus lacinia tincidunt. Ut aliquam lectus risus. Aenean aliquet neque ex, vitae fermentum arcu tristique vel. Etiam ante elit, efficitur ac lacus a, vestibulum sollicitudin nunc. Nam bibendum justo a eros consectetur rutrum. Phasellus sit amet mi tellus. Nunc in gravida libero.<br/>
									Praesent at commodo elit. Aliquam erat volutpat. Nullam sodales risus quam, in dapibus ligula malesuada sit amet. Pellentesque tempor dictum finibus. Nam accumsan sed velit a suscipit. Duis semper, dui sed luctus mattis, nisl ex pellentesque tortor, in gravida mauris lacus maximus risus. Vestibulum condimentum rhoncus orci, eu porta quam malesuada at. Integer pretium sapien vitae erat bibendum, ac ultricies nulla porta. Phasellus egestas ligula purus, ut imperdiet metus ornare quis. Nulla sodales sed massa id ultrices. Curabitur posuere, nisi id cursus placerat, arcu velit tempus felis, eget laoreet est mauris vel turpis. Etiam non semper felis, sed dignissim magna. Phasellus vitae elit non lectus vehicula pharetra.</p>
		  </div>
		  <div class="text-block">
				<h3>A much longer heading title</h3>
				<img class="img" src="assets/images/picture.png" alt="image">			
				<p class="article2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in nibh et tortor iaculis consequat eu et libero. <br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu ante pulvinar, rhoncus augue sit amet, convallis enim. Nam consequat tellus a nibh dignissim bibendum. Ut pretium ultrices viverra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi eu justo et justo sagittis malesuada. Curabitur vitae libero nec est sodales commodo. Curabitur ut lacus est. Mauris rutrum finibus ante vel hendrerit. Cras suscipit metus non dolor posuere pretium. Integer lorem justo, ornare eget lacus convallis, rutrum blandit arcu. Proin dictum iaculis leo, sit amet viverra dui congue tincidunt. Donec vel vulputate est, nec laoreet enim. Integer lacinia aliquet arcu, sit amet iaculis risus porta sit amet. Sed quis tincidunt nisl, a aliquet nunc.
									Praesent eget arcu nunc. Duis vitae neque sit amet mi hendrerit sollicitudin. Sed eu cursus eros. Nulla pellentesque mollis sapien sed malesuada. Curabitur nec pretium dolor, non venenatis ante. Etiam efficitur tortor eu sem dapibus, a volutpat erat blandit. Mauris fermentum auctor lacus quis varius. Vivamus varius tellus feugiat nulla rutrum pretium. Morbi quis ligula nisl. Aliquam consequat dolor sed sem tempor, sed sodales enim consequat. Suspendisse a vestibulum sapien, vitae mattis justo. Integer a tellus quis velit aliquam euismod vestibulum sed elit. Praesent justo nunc, fermentum id cursus at, semper vitae erat. Quisque ac tristique est, in blandit lorem. Aliquam vel volutpat tortor, sed euismod erat. Duis eu ultricies sem, vel tincidunt metus.<br/>
									Cras nisi massa, ornare sit amet lorem vitae, eleifend volutpat enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut bibendum justo vitae nulla interdum fermentum. Nam maximus molestie ante ut imperdiet. Proin laoreet, nisl sit amet tempor volutpat, libero ante scelerisque urna, eu tempus nulla augue at risus. Morbi facilisis consequat consectetur. Fusce augue quam, viverra ac purus vel, eleifend bibendum ante.</p>
		  </div>			
		  <div class="text-block">
				<h3>A heading title</h3>		
				<img class="img" src="assets/images/picture.png" alt="image">			
				<p class="article">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non interdum tellus, non pellentesque turpis. <br/><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas aliquam nisi at nibh semper, quis aliquam dui venenatis. Cras tincidunt consequat efficitur. Nulla sollicitudin vel felis eget posuere. Suspendisse rhoncus mauris a congue efficitur. Aliquam ut est elementum, euismod dolor eget, ultricies orci. Nunc blandit sem lacinia ante fermentum, at placerat arcu finibus. Nullam a pharetra est, rhoncus ullamcorper elit. Etiam tincidunt volutpat mi in pretium. Maecenas malesuada condimentum tortor, eget iaculis eros feugiat feugiat. Cras vulputate leo enim, eget consectetur justo rutrum non. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
									Sed vitae scelerisque ipsum, in gravida nulla. Pellentesque faucibus lobortis feugiat. In cursus enim sit amet laoreet mattis. Mauris a varius erat. Quisque placerat feugiat molestie. Nulla aliquam nibh id malesuada aliquet. Quisque placerat condimentum lorem, vel sodales ipsum mollis id. Donec libero quam, hendrerit non dui sed, sagittis commodo neque. Donec vitae aliquam justo, sed gravida turpis. Nunc rutrum ex at ex ultrices cursus. Aenean sollicitudin venenatis justo sed viverra. Nunc eu malesuada enim. Duis vel dapibus magna.<br/>
									Aliquam in tortor sed nisl lobortis faucibus ac vehicula libero. Nam diam quam, vulputate ut porttitor vitae, efficitur eget orci. Donec tempor bibendum turpis, eu gravida sapien porttitor id. Cras posuere, odio ac tempor tempus, augue nulla rutrum risus, nec rutrum lorem risus id lorem. Nulla fringilla ex turpis, id venenatis nunc ultricies id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel quam sed augue egestas placerat. Curabitur non erat ac nisi venenatis tempus. In interdum, turpis ut aliquam mollis, libero tortor fermentum magna, et venenatis magna lectus eu magna. Nulla facilisi. Mauris nec odio egestas, convallis odio eget, aliquam metus. Suspendisse vulputate feugiat turpis ac auctor. Fusce pharetra augue et nisl mollis auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra, nisi ut porta sollicitudin, nibh sapien dignissim felis, ut placerat nunc odio et nisi.</p>
		  </div>
		</div>
		
		<div class="contact-section">
			<h2>Contact us</h2>
			<form action="post.php" method=post>
			  <div class="form-block">	
				<div class="input-block">
				  <input class="input-area" type="text" name="firstname" placeholder="name" required><br>
				  <input class="input-area" type="text" name="e-mail" placeholder="e-mail" required><br>
				  <input class="input-area" type="text" name="phone" placeholder="phone">
				</div>
				<div class="input-block">
				  <textarea class="input-area" id="message" rows="8" cols="50" name="message" placeholder="your message"></textarea>
				</div>
			  </div>			
			  <button id="message-button" type="submit">send message</button>
			</form>
		</div>
		
	</div>
	
	<div id="scroll"><a id="scroll-anchor" href="#top-line">back to top</a></div>
	
	<footer>
	  <div class="footer-container">
		  <div class="footer-nav">
			<ul>
			  <li><a href="">&mdash; home</a></li>
			  <li><a href="">&mdash; about us</a></li>  
			  <li><a href="">&mdash; products</a></li>
			  <li><a href="">&mdash; contact</a></li>
			</ul>
		  </div>		
		  <div class="social">
			<ul>
			  <li><a href="#"><i class="icon-twitter-circled"></i></a></li>
			  <li><a href="#"><i class="icon-facebook-circled"></i></a></li>
			</ul>
		  </div>
		  <div class="signature">
			<p>Copyright &copy; 2010 Sample &amp; Pack, Inc.</p>
		  </div>	
	  </div>
	</footer>
	
</body>
</html>	
