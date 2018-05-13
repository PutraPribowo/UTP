<div class="col-lg-8">
          <img src="img/anime.jpg" alt="error" width="700" height="400">
        </div>
        <!-- /.col-lg-8 -->
<div class="col-lg-4">

         <h3>S1 Ilmu Komputer</h3>
         <hr>

		<!-- Blog Categories Well -->
	<div class="well">
     <h4>Web Categories:</h4>
	<hr>
      <div class="row">
		<div class="col-lg-6">

			<?php

				$query='select * from category';
				$select_category=mysqli_query($connection, $query);
				while($row=mysqli_fetch_assoc($select_category)){
				$cat_id=$row['cat_id'];
				$cat_judul=$row['cat_judul'];

			?>
							<table rules="none" >
							<tr>
							<ul type="square">
								<td>
								<a class="btn btn-primary btn-lg" href="index.php"><?php echo $cat_judul?></a>
								</td>
							</ul>
							</tr>
							</table>

			<?php } ?>

                        </div>
                    </div>

                </div>
			</div>
