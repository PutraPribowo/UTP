<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img class='img-responsive' src=img/logo.png alt='' width='85' height='50'>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
		<?php
				$pmenu="SELECT * FROM tb_menu  WHERE publish='T' ORDER BY urutan";
				$dmenu=mysqli_query($connection, $pmenu);
				while($rmenu=mysqli_fetch_array($dmenu)){
					$idmenu=$rmenu['idmenu'];
					$nmmenu=$rmenu['nmmenu'];

			?>
            <div class="nav-item">
				<a class="nav-link" href="index.php?idmenu=<?php echo $idmenu; ?>">
				<?php echo $nmmenu; ?></a>
			</div>
			<?php
				}
			?>
              <a class="nav-link" href="admin/index.php">Admin</a>
	   </div>
       </div>
       </nav>
