<?php include 'include2/header.php' ?>
<body>
<?php include 'include2/db.php' ?>

    <!-- Navigation -->
<?php include 'include2/navigasi.php' ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">


<!-- utama.php -->

<?php
if(isset($_GET['idmenu'])){
	 $perintah="SELECT a.*,b.nmmenu FROM tb_konten as a,tb_menu as b where a.idmenu=b.idmenu and b.idmenu=".$_GET['idmenu']." and a.publish='T'";
	 $result=mysqli_query($connection, $perintah);
	 while($data=mysqli_fetch_array($result)){
				$idkonten=$data['idkonten'];
				$judulkonten= $data['judul'];
				echo $isikonten=$data['isi'];
 }
 }
 else{

	include "utama.php";
 }
?>
	</div>
<!-- /.row -->
<!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <marquee>Halaman Web Ini Kami Buat Sebagai Ujian Tengah Peratikum (UTP) || Terima Kasih :)||</marquee>
        </div>
    </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-md-8">

			<?php
			$query ="select * from post";
			$select_post = mysqli_query($connection,$query);
			while($row=mysqli_fetch_assoc($select_post)){
				$post_judul=$row['post_judul'];
				$post_author=$row['post_author'];
				$post_image=$row['post_image'];
				$post_date=$row['post_date'];
				$post_content=$row['post_content'];

			?>
			<hr>
                <!-- First Blog Post -->
                <h2>
                    <a href="#">
					<?php echo $post_judul ?>
					</a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"><?php echo $post_date?></span></p>
                <hr>
                <img class="img-responsive" src="img/<?php echo $post_image ?>" alt="" width="300" height="300">
				<hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

			<?php } ?>

            </div>
		</div>


		<!-- /.row -->
		</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; Group Keren 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
