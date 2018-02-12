<?php
	$conn = mysqli_connect("localhost:3307", "root", "nlcfjb");
	mysqli_select_db($conn, 'opentutorials');
	$result = mysqli_query($conn, "select * from topic");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf=8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style2.css?ver=3">
</head>
<body id = "body">
	<header>
		<h1><a id='test' href="http://localhost/index.php">JavaScript</a></h1>
	</header>
	<nav>
		<ol>
			<?php
				while ($row = mysqli_fetch_assoc($result)) {
					# code...
					echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
				}
			 ?>
		</ol>
	</nav>

	<div id="control">
		<a href="http://localhost/write.php">write</a>
	</div>



	<article>

		<form class="" action="process.php" method="post">
			<p>title</p>
			<p><input type="text" name="title" value=""></p>
			<p>writer</p>
			<p><input type="text" name="writer" value=""></p>
			<p>description</p>
			<p><textarea name="description" rows="15" cols="80"></textarea></p>
			<input type="submit" name="" value="submit">
		</form>

	</article>

	<script src="http://localhost/script.js">
	</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a7ee6814b401e45400cd65d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
