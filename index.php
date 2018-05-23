<?php
	require_once('head.php');
	require_once('navbar.php');
?>

	<div class="container">
		<section>
			<div class="row">
			<?php
				$sql = mysqli_query($link, "select * from vids ORDER BY id DESC");
				while($res = mysqli_fetch_array($sql))
				{
					$name = explode(".mp4", $res['file']);
					echo '
					<div class="col-md-12">
						<h4><a href="">'.$name[0].'</a></h4>
						<div class="embed-responsive embed-responsive-16by9">
							<video class="embed-responsive-item" controls preload="metadata" poster="thumbs/'.$res['thumb'].'">
								<source src="vids/'.$res['file'].'" type="video/mp4">
							</video>
						</div>
					</div>';
				}
				mysqli_close($link);
			?>
			</div>
		</section>
	</div>
<?php require_once('foot.php'); ?>