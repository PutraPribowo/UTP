<form action="" method="post">

								<div class="form-group">
								<label for="cat_judul"> Edit Category </label>
									<?php
								if(isset($_GET['edit'])){
								$cat_id = $_GET['edit'];
								$query ="select * from category WHERE cat_id = $cat_id";
								$select_categories_id = mysqli_query($connection,$query);
							
								while($row = mysqli_fetch_assoc($select_categories_id)){
								$cat_id = $row['cat_id'];
								$cat_judul = $row['cat_judul'];
									?>
								<input value="<?php if(isset($cat_judul)){echo $cat_judul;}?>" type="text" class="form-control" name="cat_judul">
									
								<?php }}?>	
									
								<?php								
								// Update
								if(isset($_POST['update_category'])){
								$the_cat_judul = $_POST['cat_judul'];
								$query = "UPDATE category SET cat_judul = '{$the_cat_judul}' where cat_id ={$cat_id}";
								$update_query = mysqli_query($connection,$query);
									if(!$update_query){
										die("QUERY FAILED" . mysqli_error($connection));
									}
								}
								?>								
						</div>
						<div class="form-group">
								<input class="btn btn-primary" type="submit" name="update_category" value="Update">
						</div>
</form>