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
                           Welcome Admin <?=$_SESSION['username'];?> 
                            <small></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

           <?php include 'include/admin_footer.php' ?>
