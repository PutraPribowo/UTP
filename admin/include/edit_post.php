<?php
if(isset($_GET['p_id'])){
$the_post_id = $_GET['p_id'];
}	
	
$query ="select * from post WHERE post_id=$the_post_id";
$select_post_by_id = mysqli_query($connection,$query);
							
while($row = mysqli_fetch_assoc($select_post_by_id)){
	
		$post_id = $row['post_id'];
		$post_author = $row['post_author'];
		$post_judul = $row['post_judul'];	
		$post_category_id = $row['post_category_id'];
		$post_status = $row['post_status'];		
		$post_image = $row['post_image'];
		$post_content = $row['post_content'];
		$post_tags=$row['post_tags'];
		$post_comment_count = $row['post_comment_count'];
		$post_date = $row['post_date'];
	
		

}

		if(isset($_POST['Update_post'])){
			
																
		$post_author = $_POST['post_author'];
		$post_judul = $_POST['post_judul'];
		$post_category_id = $_POST['post_category'];
		$post_status = $_POST['post_status'];														
		$post_image = $_FILES['image']['name'];
		$post_image_temp = $_FILES['image']['tmp_name'];
		$post_content = $_POST['post_content'];
		$post_date = date('dd-mm-yyyy');
		$post_tags = $_POST['post_tags'];
		
			
		move_uploaded_file($post_image_temp, "../img/$post_image");
		
		if(empty($post_image)){
			
		$query = "SELECT * from post where post_id = $the_post_id";
		$select_image = mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($select_image)){
			
			$post_image = $row['post_image'];
		}
		
		}
		
		$query = "UPDATE post SET";
		$query .= "`post_judul` = '{$post_judul}', ";														
		$query .= "`post_category_id` = '{$post_category_id}', ";
		$query .= "`post_date` = now(),";
		$query .= "`post_author` = '{$post_author}', ";
		$query .= "`post_status` = '{$post_status}', "; 
		$query .= "`post_tags` = '{$post_tags}', ";
		$query .= "`post_content` = '{$post_content}', ";
		$query .= "`post_image` = '{$post_image}' ";
		$query .= "WHERE `post_id` = {$the_post_id}";
		
		$update_post= mysqli_query($connection, $query);
		confirmQuery($update_post);
		

}




?>

<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
	<label for="post_judul">Post Title</label>
	<input value="<?php echo $post_judul;?>" type="text" class="form-control" name="post_judul">
</div>

<div class="form-group">
<select name="post_category" id="">

	<?php
	
	$query ="select * from category ";
	$select_categories = mysqli_query($connection,$query);
	
	confirmQuery($select_categories);
	
	while($row = mysqli_fetch_assoc($select_categories)){
	$cat_id = $row['cat_id'];
	$cat_judul = $row['cat_judul'];	
	
	echo "<option value='$cat_id'>{$cat_judul}</option>";
	
	} ?>
	
</select>
</div>

<div class="form-group">
	<label for="post_author">Post Author</label>
	<input value="<?php echo $post_author;?>" type="text" class="form-control" name="post_author">
</div>

<div class="form-group">
	<label for="post_status">Post status</label>
	<input value="<?php echo $post_status;?>" type="text" class="form-control" name="post_status">
</div>

<div class="form-group">
	<img width="100" src="../img/<?php echo $post_image; ?>" alt="">
	<input type="file" name="image">
</div>

<div class="form-group">
	<label for="post_tags">Post Tags</label>
	<input value="<?php echo $post_tags;?>" type="text" class="form-control" name="post_tags">
</div>

<div class="form-group">
	<label for="post_content">Post Content</label>
	<textarea value="<?php echo $post_content;?>" type="text" class="form-control" name="post_content" id="" cols="30" rows="10">
	<?php echo $post_content;?>
	</textarea>
</div>

<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Update_post" value="Update Post">
</div>

</form>