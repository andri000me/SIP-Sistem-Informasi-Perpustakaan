<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Detail Buku</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item" href="<?=site_url('cbuku')?>">Data Buku</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li class="active">Detail Buku</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div class="tab-pane active fontawesome-demo" id="tab1">
						<div class="row">
							<div class="col-md-12">
								<div class="card card-topline-yellow">
									<div class="card-head">
										<header>Data</header>
										</div>
									<div class="card-body ">
										<table class="table table-bordered">
											<tbody>
												<?php if(empty($qbuku)) { ?>
												<?php header("Location: ".base_url());?>
die();
												<?php }else {
            
                foreach ($qbuku as $rowbuku) {
                 ?>
												<tr>
													<td>
														ISBN
													</td>
													<td>
														<?=$rowbuku->kode_buku?>
													</td>
												</tr>
												<tr>
													<td>Judul</td>
													<td>
														<?=$rowbuku->judul?>
													</td>
												</tr>
												<tr>
													<td>
														Penerbit
													</td>
													<td>
														<?=$rowbuku->penerbit?>
													</td>
												</tr>
												<tr>
													<td>
														Pengarang
													</td>
													<td>
														<?=$rowbuku->pengarang?>
													</td>
												</tr>
                                                <tr>
												<td>
													Tahun terbit
												</td>
												<td>
													<?=$rowbuku->th_terbit?>
												</td>
                                                </tr>
												<tr>
												<td>
													Deskripsi
												</td>
												<td>
													<?=$rowbuku->ket?>
												</td>
												</tr>
												<?php }} ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
