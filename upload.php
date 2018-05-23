<?php

	require_once('head.php');
	require_once('navbar.php');

	if(isset($_POST['submit']))
	{

		if($_FILES["thumb"]["name"] != '')
		{
			$thumb = $_FILES["thumb"]["name"];
		} else
		{
			$thumb = 'Youtube.ico';
		}

	    if (!file_exists("vids/" . $_FILES["vids"]["name"]))
	    {
	    	$qry = mysqli_query($link, 'INSERT INTO vids (kat,file,thumb) VALUES ("'.$_POST['kat'].'","'.$_FILES["vids"]["name"].'","'.$thumb.'")');
	    	if($qry)
			{
				move_uploaded_file($_FILES["vids"]["tmp_name"], "vids/".$_FILES["vids"]["name"]);
				move_uploaded_file($_FILES["thumb"]["tmp_name"], "thumbs/".$_FILES["thumb"]["name"]);
			}

		}
	}
?>
<div style="padding-bottom:20px;"></div>
	<div class="container">
		<section>
			<div class="row">
				<div class="col-md-12">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="vid">Browse Video </label>
							<input type="file" name="vids"  id="vid">
						</div>
						<div class="form-group">
							<label for="thumb">Browse Thumb </label>
							<input type="file" name="thumb" id="thumb">
						</div>
						<div class="form-group">
							<select name="kat" class="form-control">
								<option value="1">Movie</option>
								<option value="2">Kids</option>
								<option value="3">Video Clips</option>
							</select>
						</div>
						<div class="form-group">
							<input type="submit" class="btn" name="submit">
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
<?php require_once('foot.php'); ?>