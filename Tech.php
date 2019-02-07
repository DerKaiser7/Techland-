<?php
	require 'header.php';
	include_once('includes/techland.inc.php');
?>

<div class="categories">
	<div class="row">
		<div class="col-lg-12" id="category">
			<h3>Techland Nigerian Forum</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12" id="category">
				<a href="" title="Techland! Your Number one Nigerian tech Forum">Techland / General:</a> 
				<?php
					$sql = "SELECT * FROM category;";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<a href=""><?php echo $row['name'] ?> ,</a> 
				<?php
					}

				?>	
		</div>
	</div>
</div>

<div class="news">
		<div class="row">
			<div class="col-lg-12" id="category">
				<a href="">Featured Links</a> / 
				<a href="http://facebook.com/stephenjohnson01">Facebook</a> / 
				<a href="http://twitter.com/the_bimss">Twitter</a> /
				<a href="">How to Advertise</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12"> 
			<?php
					$sql = "SELECT * FROM questions  order by Date_asked DESC;";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($result)) {
				?>
					<a target="_blank" href="news1.php?id=<?php echo $row['Question_id']; ?>"
					><?php echo $row['title'] ?>
					</a> <br>
				<?php
					}

				?>	
			</div>
		</div>
</div>


<footer>
	<div class="pagefooter">
		<div class="row">
			<div class="col-lg-12">
				<form action="">
					<input type="text" name="question" size="64">
					<button type="submit" name="submit">Search</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="">Techland</a> - Copyright © 2005 - 2019 
				<a href="facebook.com/stephenjohnson01">Falodu Stephen Abimbola</a>. All rights reserved
				See <a href="">How to Advertise</a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				Disclaimer: Every Techland member is solely responsible for anything that he/she posts or uploads on Techland.
			</div>
		</div>
	</div>
</footer>


</body>
<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>