
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="/stylesheets/main.css" />
	</head>
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo htmlspecialchars($_POST['content']);
      echo "\n</pre>";
    }
    ?>
	<!--
    <form action="/sign" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form> */ -->
	<?php
	echo "<div id=\"wrapper\" style=\"width:100%; text-align:center\">
		<img src=\"/imgs/404.jpg\"/>
	</div>";
	?>
  </body>
</html>