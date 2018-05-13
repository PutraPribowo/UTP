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
                            <small>Category</small>
                        </h1>

						<div class="col-xs-6">
						<?php
						insert_categories();
						?>
						</div>


						<div class="col-xs-7">
							<form action="" method="post">
								<div class="form-group">
								<label for="cat_judul">Add Category</label>
								<input type="text" class="form-control" name="cat_judul">
						</div>
						<div class="form-group">
								<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
						</div>
							</form>


							<?php //Update And Include Query
							if(isset($_GET['edit'])){

								$cat_id = $_GET['edit'];
								include "include/update_cat.php";
							}

							?>

						</div>

						<div class="col-xs-5">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Id</th>
									<th>Category Title</th>
								</tr>
							</thead>
							<tbody>

							<?php //Find all categories query
							findAllCategories();
							?>

							<?php
							// Delete
							deleteCategories();

							?>

								<tr>
								</tr>
							</tbody>
						</table>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

           <?php include 'include/admin_footer.php' ?>
	</div>
		</div>
</body>
