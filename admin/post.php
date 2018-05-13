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
                            <small>Edit All Post</small>
                        </h1>
						
						<?php
						
						if(isset($_GET['source'])){
							$source = $_GET['source'];
						} else {$source='';}
						
						
						switch($source) {
							case 'add_post';
							include "include/add_post.php";
							break;
							
							case 'edit_post';
							include "include/edit_post.php";
							break;
							
							case '200';
							echo "Nice 200";
							break;
							
							
						default;	
						
						include "include/view_all_post.php";
						
						break;
						
						}
						
						?>
						
						
						
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

           <?php include 'include/admin_footer.php' ?>
		  </div> 
</body>