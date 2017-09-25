<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>SamplePack - dane</title>
	<style type="text/css">
	table 
	{
		border:none;
		margin:0 auto 4% auto;
	}
	
	table tr .label
	{
		font-size:1.2em; 
		color:#fff;
		text-shadow:1px 1px 1px #568F23;
		background-color:#9DD929;
		border:1px solid #93CE37;
		border-right:3px solid #9ED929;
		padding:0 10px;
		background:-webkit-gradient(
        linear,
        left bottom,
        right top,
        color-stop(0.02, rgb(158,217,41)),
        color-stop(0.51, rgb(139,198,66)),
        color-stop(0.87, rgb(123,192,67))
        );
		background: -moz-linear-gradient(
        left bottom,
        rgb(158,217,41) 2%,
        rgb(139,198,66) 51%,
        rgb(123,192,67) 87%
        );
		-moz-border-radius:5px 0px 0px 5px;
		-webkit-border-top-left-radius:5px;
		-webkit-border-bottom-left-radius:5px;
		border-top-left-radius:5px;
		border-bottom-left-radius:5px;
	}
	
	table tr .value
	{
		font-size:1.2em; 
		padding:10px;
		text-align:center;
		background-color:#DEF3CA;
		border: 2px solid #E7EFE0;
		-moz-border-radius:2px;
		-webkit-border-radius:2px;
		border-radius:2px;
		color:#666;
		text-shadow:1px 1px 1px #fff;
	}
	</style>
</head>

<body>
	<div>
	  <?php
	  //jeśli użytkownik nie napisał żadnej wiadomości
	  if (empty($_POST['message'])) {
		  
	    echo '<p style="font-family: \'Open Sans\', sans-serif; font-size:1.5em; color:red; text-align:center; margin:2% auto 6% auto;">';
	    echo '<b>Brak danych do wyświetlenia!</b><br/>';
	    echo '</p>';
	    exit;
	  
	  //jeśli użytkownik napisał wiadomość
	  } else {	  
	
	    echo '<p style="font-family: \'Open Sans\', sans-serif; font-size:1.5em; color:#32CD32; text-align:center;"><b>Dziękujemy za wysłanie formularza z następującymi danymi: </b></p>';
	 
		//funkcja sprawdza ile jest pól w formularzu i wyświetla dane w tabeli
	    function showFormData()
		{
			echo "<table border=\"none\">\n";
			foreach ($_POST as $key => $value)
			echo "<tr>
					<td align=\"right\" class=\"label\">".htmlspecialchars($key).": </td>
					<td align=\"right\" class=\"value\">".htmlspecialchars($value)."</td>
				  </tr>\n";
			echo "</table>";	  
	    }
		
		//wywołanie funkcji
	    showFormData();
	  }
	  ?>
	</div>
</body>
</html>	
