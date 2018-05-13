<div class="container">
			<?php

			 if(!isset($_GET['idmenu'])){
			echo '
			  <div class="row">
				<div class="col-md-12 wow fadeIn delay-05s">
				  <div class="banner-text">
					<h2>'.$descriptionweb1.'</h2>
					<p>'.$descriptionweb2.'</p>
				  </div>

				  <div class="overlay-detail text-center">
					  <a href="index.php?idmenu=2"><i class="fa fa-angle-down"></i></a>
				  </div>
				</div>
			  </div>
			  ';
			 }else{
				$perintah="SELECT a.*,b.nmmenu FROM tb_konten as a,tb_menu as b where a.idmenu=b.idmenu and b.idmenu=".$_GET['idmenu']." and a.publish='T'";
				$result=mysql_query($connection, $perintah);
					while($data=mysqli_fetch_array($result)){
						$idkonten=$data['idkonten'];
						$judulkonten=$data['judul'];
						$isikonten=$data['isi'];
					}
			?>
				<div class="row">
					<div class="col-md-12 wow fadeIn delay-05s">
					  <div class="banner-text">
						<h2><?php echo $judulkonten; ?></h2>
						<h3><?php echo $isikonten; ?></h3>
					  </div>
					</div>
				</div>';
			<?php
			}
			?>
</div>
