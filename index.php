<?php
	$data = file_get_contents('assets/json/data.json');
	$dataDecoded = json_decode($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nomophobie</title>
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">


		<header>
      <h1>Êtes-vous nomophobe? Passez le test!</h1>
		</header>

		<form action="post" onsubmit="event.preventDefault();">
			<div class="questions1">
        <h2>Placez-vous sur une échelle de 1 à 7 &mdash; 1 marquant le désaccord total, 7 vous êtes tout à fait d'accord avec la proposition &mdash;</h2>
			<?php
				for($i = 1; $i <= 10; $i++){

					?>

							<label for='question<?php echo($i); ?>'>
							<p><?php echo('Question Nº ' . $i . ' &mdash; ' . $dataDecoded->$i); ?><br>
								<input type="range" id="question<?php echo($i); ?>" class="question" name="question<?php echo($i); ?>" min="1" max="7" onchange="rangevalue<?php echo($i); ?>.value=value" type="range">
								<output id="rangevalue<?php echo($i); ?>">4</output>

					<?php
				}
				?>
			</div>
			<div class="questions2">
        <h2>Les questions suivantes commencent toutes par la proposition <strong>"Si je n’avais pas mon téléphone avec moi..."</strong></h2>
<?php
				for($i = 11; $i <= 20; $i++){

					?>

							<label for='question<?php echo($i); ?>'>
							<p><?php echo('Question Nº ' . $i . ' &mdash; ' . $dataDecoded->$i); ?><br>
								<input type="range" id="question<?php echo($i); ?>" class="question" name="question<?php echo($i); ?>" min="1" max="7" onchange="rangevalue<?php echo($i); ?>.value=value" type="range">
								<output id="rangevalue<?php echo($i); ?>">4</output>

					<?php
				}
			?>
			</div>
			</form>
			<div class="resultat">
				<input type="submit" id="submit" value="Mon Score">
				<p id="score"></p>
			</div>



		<footer>
			<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="https://unsplash.com/@rowaneal?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Rowan Neal"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title></title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Rowan Neal</span></a>
		</footer>

  </div>

	<script src="lib/js/jquery.js"></script>
	<script src="lib/js/app.js"></script>

</body>
</html>
