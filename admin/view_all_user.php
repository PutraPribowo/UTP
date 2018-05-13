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
                            <small>View All User</small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

			<table class="table table-bordered table-hover">
							<thead>
								<tr></tr>
									<th>Id</th>
									<th>Username</th>
									<th>Password</th>
								<tr></tr>								
							</thead>

							<tbody>
							<?php

							$query ="select * from user";
							$select_post = mysqli_query($connection,$query);
							while($row = mysqli_fetch_assoc($select_post)){
							$post_id = $row['id'];
							$post_username = $row['username'];
							$post_pass = $row['password'];


							echo "<tr>";
							echo "<td>$post_id</td>";
							echo "<td>$post_username</td>";
							echo "<td>$post_pass</td>";

							echo "<td><a href='edit_user.php?id={$post_id}'>Edit</a></td>";
							echo "<td><a href='view_all_user.php?delete={$post_id}'>Delete</a></td>";
							}
							?>
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
