<?php

if(isset($_POST['create_post'])){
	
	$post_judul = $_POST['post_judul'];														
	$post_author = $_POST['post_author'];
	$post_category_id = $_POST['post_category_id'];
	$post_status = $_POST['post_status'];														
	$post_image = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];
	
	$post_tags = $_POST['post_tags'];
	$post_content = $_POST['post_content'];
	$post_date = date('dd-mm-yyyy');
	$post_comment_count=4;
	
	
	move_uploaded_file($post_image_temp, "../img/$post_image");
	
	$query ="INSERT INTO post(post_category_id,post_judul,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status) ";
	
	$query .= 
	"VALUES({$post_category_id},'{$post_judul}','{$post_author}', now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}' ) ";
	
	$create_post_query = mysqli_query($connection, $query);
	
	if(!$create_post_query){		
	die("QUERY FAILED" . mysqli_error($connection));
	
							}

							}	

?>


<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
	<label for="post_judul">Post Title</label>
	<input type="text" class="form-control" name="post_judul">
</div>

<div class="form-group">
	<label for="post_category_id">Post Category Id</label>
	<input type="text" class="form-control" name="post_category_id">
</div>

<div class="form-group">
	<label for="post_author">Post Author</label>
	<input type="text" class="form-control" name="post_author">
</div>

<div class="form-group">
	<label for="post_status">Post status</label>
	<input type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
	<label for="post_image">Post Image</label>
	<input type="file" name="image">
</div>

<div class="form-group">
	<label for="post_tags">Post Tags</label>
	<input type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
	<label for="post_content">Post Content</label>
	<textarea type="text" class="form-control" name="post_content" id="" cols="30" rows="10"></textarea>
</div>

<div class="form-group">
	<input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
</div>

</form>