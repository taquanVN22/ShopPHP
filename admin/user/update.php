
<?php
  if(isset($one_user) && (is_array($one_user))){
    extract($one_user);
  }

  $img_path="../../upload/".$img;
  if (is_file($img_path)) {
    $images = "<img width='50px' height='50px' src='".$img_path."' alt='Image'>";
  } else {
    $images = "no photo";
  }
?>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- column -->
			<div class="col-md-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Sửa User</h3>
					</div>
					<!-- form start -->
					<form action="index.php?action=updateuser" method="post" enctype="multipart/form-data">
						<div class="card-body">
							<div class="form-group">
								<label>Họ và Tên</label>
								<input type="text" class="form-control"placeholder="Your Name" name="fullname" value="<?=$fullname?>" require>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" value="<?=$email?>" placeholder="Your Email" require>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control" name="password" value="<?=$pass?>" placeholder="Your Password" require>
							</div>
							<div class="form-group">
								<label>Images</label>
								<input type="file" class="form-control mb-2" name="upload">
                <?=$images?>
							</div>
							<div class="form-group">
								<label>Tel</label>
								<input type="text" class="form-control" name="tel" placeholder="Your Phone" value="<?=$tel?>">
							</div>
              <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" value="1" id="active" type="radio" name="active" checked>
                  <label for="active" class="custom-control-label">Có</label>
                </div>
                <div class="custom-control custom-radio">
                  <input class="custom-control-input" value="0" id="no_active" type="radio"  name="active">
                  <label for="no_active" class="custom-control-label">Không</label>
                </div>
              </div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
              <input type="hidden" name="id" value="<?=$id?>">
							<input type="submit" value="Lưu" name="update" class="btn btn-success mr-2" style="width: 100px;">
							<a href="index.php?action=listuser"><input type="button" value="Cancel" name="" class="btn btn-warning" style="width: 100px;color:#fff;"></a>
						</div>
					</form>
					<!-- end form -->
				</div>
			</div>
			<?php
				if(isset($thongbao)&&($thongbao!="")) echo '<p class="text-danger">'.$thongbao.'</p>';
			?>
			<!-- stary button -->

			<!-- end buttom -->
		</div>

	</div>
</section>