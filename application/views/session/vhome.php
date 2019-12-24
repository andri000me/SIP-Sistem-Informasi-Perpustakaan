<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Dashboard</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>
		<!-- start widget -->
		<div class="state-overview">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<a href="<?= site_url('cmember') ?>">
						<div class="overview-panel purple">
							<div class="symbol">
								<i class="fa fa-user"></i>
							</div>
							<div class="value white">
								<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hmember)) {
																										echo $hmember;
																									} else {
																										echo "Data tidak muncul!";
																									} ?>">0</p>
								<p>Total Member</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= site_url('cbuku') ?>">
						<div class="overview-panel deepPink-bgcolor">
							<div class="symbol">
								<i class="fa fa-book"></i>
							</div>
							<div class="value white">
								<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hbuku)) {
																										echo $hbuku;
																									} else {
																										echo "Data tidak muncul!";
																									} ?>">0
								</p>
								<p>Total Buku</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-lg-3 col-sm-6">
					<a href="<?= site_url('cpeminjaman') ?>">
						<div class="overview-panel orange">
							<div class="symbol">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="value white">
								<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hpeminjaman)) {
																										echo $hpeminjaman;
																									} else {
																										echo "Data tidak muncul!";
																									} ?>">0</p>
								<p>Total Peminjaman</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-sm-6">
					<a href="<?= site_url('cpengembalian') ?>">
						<div class="overview-panel blue-bgcolor">
							<div class="symbol">
								<i class="fa fa-refresh fa-spin fa-1x"></i>
							</div>
							<div class="value white">
								<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hpengembalian)) {
																										echo $hpengembalian;
																									} else {
																										echo "Data tidak muncul!";
																									} ?>">0</p>
								<p>Total Pengembalian </p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- end widget -->
		<!-- chart start -->
		<div class="row">
			<div class="col-5">
				<div class="card card-box">
					<div class="card-head">
						<header>Tambah Peminjam</header>
						<?php if (isset($sukses)) {
							echo $sukses;
						};  ?>
					</div>
					<div class="card-body" id="bar-parent">
						<form action="<?= base_url() ?>cpeminjaman/form/add_save" method="post" id="form_sample_1" class="form-horizontal">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Member
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="member_id">
											<?php foreach ($qmember as $rm) {
												if ($rm->member_id == $member_id) {
													echo "<option value=" . $rm->member_id . " selected>" . $rm->kode_member . " " . $rm->nama . "</option>";
												} else {
													echo "<option value=" . $rm->member_id . ">" . $rm->kode_member . " " . $rm->nama . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Buku
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control select2" name="buku_id">
											<?php foreach ($qbuku as $rb) {
												if ($rb->buku_id == $buku_id || $rb->jumlah > 0) {
													echo "<option value=" . $rb->buku_id . " selected>Sisa " . $rb->jumlah . ' - ' . $rb->kode_buku . ' ' . $rb->judul . "</option>";
												}
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Jumlah
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<input type="text" name="jumlah_pinjam" data-required="1" placeholder="5" value="" class="form-control input-height" /> </div>
								</div>
								<div class="form-group row" hidden>
									<label class="control-label col-md-3">Status
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<select class="form-control input-height selectpicker" data-live-search="true" name="status">
											<option value="Pinjam" selected>Pinjam</option>
											<option value="Kembali">Kembali</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label class="control-label col-md-3">Keterangan Pinjam
										<span class="required"> * </span>
									</label>
									<div class="col-md-8">
										<input type="text" name="ket_pinjam" data-required="1" placeholder="Keterangan..." value="" class="form-control input-height" /> </div>
								</div>

								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button name="submit" type="submit" class="btn btn-success m-r-20"><i class="fa fa-save"></i>
												Simpan</button><button class="btn btn-danger" type="reset" value="reset">
												Reset</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-box">
					<div class="card-head">
						<header>Populer</header>

					</div>
					<div class="card-body no-padding height-9" style="overflow-y:scroll; height:390px;">
						<div class="row">
							<ul class="docListWindow">
								<?php foreach ($qpopuler as $qp) : ?>
									<li>
										<div class="prog-avatar">
											<img src="<?= base_url() ?>img/book.png" alt="">
										</div>
										<div class="details">
											<div class="doctitle">
												<a href="<?= base_url() ?>cbuku/detail_buku/<?= $qp->buku_id ?>"><?= $qp->judul ?></a>
											</div>

										</div>
									</li>
								<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card card-box">
					<div class="card-head">
						<header>List Buku</header>

					</div>
					<div class="card-body no-padding height-9" style="overflow-y:scroll; height:390px;">
						<div class="row">
							<ul class="docListWindow">
								<?php foreach ($qbuku as $qb) : ?>
									<li>
										<div class="prog-avatar">
											<img src="<?= base_url() ?>img/book.png" alt="">
										</div>
										<div class="details">
											<div class="doctitle">
												<a href="<?= base_url() ?>cbuku/detail_buku/<?= $qb->buku_id ?>"><?= $qb->judul ?></a>
											</div>
											<div>
												<?php
												if ($qb->jumlah > 0) {
													echo '<span class="clsAvailable float-right">Tersedia</span>';
												} else {
													echo '<span class="clsNotAvailable float-right">Tidak Tersedia</span>';
												}
												?>
											</div>
										</div>
									</li>
								<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Chart end -->
	</div>
</div>
<!-- end chat sidebar -->
</div>
<!-- end page container -->