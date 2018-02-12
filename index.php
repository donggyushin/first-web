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
		<h1><a id='test' href="http://localhost/index.php">Donggyu's Park</a></h1>
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
		<div class = "main">
		<?php

			if (empty($_GET['id'])==false) {
				# code...
				$sql = 'select * from topic where id = '.$_GET['id'];
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo '<h1>'.$row['title'].'</h2>'."\n";
				echo $row['description'];
			}

		 ?>
	 </div>

		<div id="disqus_thread"></div>
		<script>

		/**
		*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
		*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
		/*
		var disqus_config = function () {
		this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
		this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
		};
		*/
		(function() { // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement('script');
		s.src = 'https://donggyus-park.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
		})();
		</script>
		<div class="error">
			<?php
				echo "_________________________________________________________________";
			 ?>
		</div>

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
