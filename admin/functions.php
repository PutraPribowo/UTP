<?php

function confirmQuery($result){
	global $connection;
	
	if(!$result){
		
		die("QUERY FAILED." .mysqli_error($connection));
	}
}

function insert_categories(){
	global $connection;
	
	if(isset($_POST['submit'])){
						$cat_judul = $_POST['cat_judul'];
						if($cat_judul == "" || empty($cat_judul)){
						echo "Harus Diisi..";
						}
						else{
						$query="Insert Into Category(cat_judul)";
						$query .="VALUE('{$cat_judul}')";
						$create_category_query = mysqli_query($connection, $query);
						
						if(!$create_category_query){
							die('QUERY FAILED' . mysqli_error($connection));
								}
;							}
						}
}

function findAllCategories(){
	global $connection;
	
	$query ="select * from category";
							$select_categories = mysqli_query($connection,$query);
							
							while($row = mysqli_fetch_assoc($select_categories)){
							$cat_id = $row['cat_id'];
							$cat_judul = $row['cat_judul'];
							
							echo"<tr>";
								echo"<td>{$cat_id}</td>";
								echo"<td>{$cat_judul}</td>";
								echo"<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
								echo"<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";

							echo"</tr>";
					}
}

function deleteCategories(){
	global $connection;
	
if(isset($_GET['delete'])){
							
$the_cat_id = $_GET['delete'];
$query = "DELETE from category where cat_id ={$the_cat_id}";
$delete_query = mysqli_query($connection,$query);
header("Location: categories.php");
							}
	
}
?>