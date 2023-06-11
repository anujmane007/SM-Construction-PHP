<?php
include('header.php');
?>
<title>Add Your Review</title>
<script src="js/comments.js"></script>
<?php include('container.php'); ?>
<div class="container" style="border: 1px solid #ccc; background-color: #f5ad38;">

	<br>
	<form method="POST" id="commentForm">
		<div class="form-group">
			<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
		</div>
		<div class="form-group">
			<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5"
				required></textarea>
		</div>
		<span id="message"></span>
		<br>
		<div class="form-group">
			<input type="hidden" name="commentId" id="commentId" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
		</div>
	</form>
	<br>
	<div id="showComments"></div>
</div>
<?php include('footer.php'); ?>