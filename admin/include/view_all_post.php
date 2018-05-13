<table class="table table-bordered table-hover">
							<thead>
								<tr></tr>
									<th>Id</th>
									<th>Author</th>
									<th>Title</th>
									<th>Category</th>
									<th>Category_Id</th>
									<th>Status</th>
									<th>Image</th>
									<th>Tags</th>
									<th>Comment</th>
									<th>Date</th>
								<tr></tr>
							</thead>

							<tbody>
							<?php

							$query ="select * from post";
							$select_post = mysqli_query($connection,$query);

							while($row = mysqli_fetch_assoc($select_post)){
							$post_id = $row['post_id'];
							$post_judul = $row['post_judul'];
							$post_author = $row['post_author'];
							$post_image = $row['post_image'];
							$post_comment = $row['post_comment_count'];
							$post_category_id = $row['post_category_id'];
							$post_date = $row['post_date'];
							$post_tags=$row['post_tags'];
							$post_status = $row['post_status'];

							echo "<tr>";
							echo "<td>$post_id</td>";
							echo "<td>$post_author</td>";
							echo "<td>$post_judul</td>";


								$query ="select * from category WHERE cat_id = {$post_category_id}";
								$select_categories_id = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($select_categories_id)){
								$cat_id = $row['cat_id'];
								$cat_judul = $row['cat_judul'];

								echo "<td>{$cat_judul}</td>";

							}


							echo "<td>$post_category_id</td>";
							echo "<td>$post_status</td>";
							echo "<td><img class='img-responsive' src='../img/$post_image' alt='image'></td>";
							echo "<td>$post_tags</td>";
							echo "<td>$post_comment</td>";
							echo "<td>$post_date</td>";
							echo "<td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
							echo "<td><a href='post.php?delete={$post_id}'>Delete</a></td>";
							echo "<tr>";

							}

							?>


						</tbody>

						</table>

						<?php

						if(isset($_GET['delete'])){

							$the_post_id = $_GET['delete'];
							$query = "Delete from post where post_id = {$the_post_id} ";
							$delete_query = mysqli_query($connection, $query);
						}

						?>
