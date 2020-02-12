<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success" role="alert">
						<?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/kendaraan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/kendaraan/add') ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" type="text" name="name" placeholder="Nama Kendaraan" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Gambar</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Jenis*</label>
								<input class="form-control <?php echo form_error('jenis') ? 'is-invalid' : '' ?>" type="text" name="jenis" min="0" placeholder="Jenis Kendaraan" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nopol*</label>
								<input class="form-control <?php echo form_error('nopol') ? 'is-invalid' : '' ?>" type="text" name="nopol" min="0" placeholder="Nomor Polisi Kendaraan" />
								<div class="invalid-feedback">
									<?php echo form_error('nopol') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Merk*</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid' : '' ?>" type="text" name="merk" min="0" placeholder="Merk Kendaraan" />
								<div class="invalid-feedback">
									<?php echo form_error('merk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Status*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid' : '' ?>" name="status" placeholder="Status Ketersediaan Kendaraan"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>