<?php include 'include/admin_header.php' ?>
<?php include 'include/db.php' ?>

<body>

    <div id="wrapper">

	
        <?php include 'include/admin_navigasi.php' ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Edit User</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

			<table class="table table-bordered table-hover">
<form action="edit_usernya.php?id=<?php echo $_GET['id']?>" method="post" enctype="multipart/form-data">
<div class="form-group">

	<label for="id">USER NAME</label>
	<input type="text" class="form-control" name="username">
</div>

<div class="form-group">
	<label for="password">PASSWORD</label>
	<input type="text" class="form-control" name="password">
</div>

<div class="form-group">
	<input class="btn btn-primary" type="submit" name="edit_user" value="Edit">
</div>
</form>
							</table>
							
							<?php
						
						if(isset($_GET['delete'])){
							
							$the_post_id = $_GET['delete'];
							$query = "Delete from user where id = {$the_post_id} ";
							$delete_query = mysqli_query($connection, $query);
						}
						
						?>
        </div>
        <!-- /#page-wrapper -->

		
		
		
           <?php include 'include/admin_footer.php' ?>


