<?php
	
	include_once('includes/techland.inc.php');

	if(!isset($_GET['id'])) {
		header('Location: Tech.php');
		exit();
	}

	$id = $_GET['id'];
	$title = "";
	$content = "";

	$sql = "SELECT * FROM questions where Question_id = ".$id;
	$result = mysqli_query($conn, $sql);

	if ($row = mysqli_fetch_assoc($result)) {
		$title = $row['title'];
		$content = $row['Question_details'];
	}

	//TODO:
	//Assignment: write sql query to fetch comments and display comment for each questions/topic
	

	require 'header.php'
?>

<div class="news">
		<div class="row">
			<div class="col-lg-12" id="category">
				<b><?php echo $title; ?></b>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12"> 
				<p class="news-detail">
					<?php echo $content ?>
				</p> 
			</div>
		</div>
</div>

<?php
	$getCommentsQuery = "SELECT a.`Answer_details` as answer, a.`Time_answered` as created_at,
	u.user_uid,
	concat(u.user_last, u.user_first) as name
	FROM `answers` as a, users as u
	WHERE 
	a.`User_uid` = u.user_id AND
	a.`Question_id` = ".$id;

	$result = mysqli_query($conn, $getCommentsQuery);

	while ($row = mysqli_fetch_assoc($result)) {
?>
	<div class="comments">
		<div class="row">
			<div class="col-lg-12" id="replies">
				<a href="news1.php">Re: <?php echo $title; ?></a> by <b><?php echo $row['name'] ?></b>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" id="main-comment"> 
				<?php echo $row['answer'] ?>
			</div>
		</div>
</div> 
<?php
	}

?>	


<div class="row">
	<div class="col-lg-12">
		(<b>0</b>)
		<a href="#"> (<b>1</b>) </a>
		<a href="#"> (<b>2</b>) </a>
		<a href="#"> (Reply) </a>
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