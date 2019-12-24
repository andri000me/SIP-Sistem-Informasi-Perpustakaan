
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Dashboard</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</div>
		<!-- start widget -->
		<div class="state-overview">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="overview-panel purple">
						<div class="symbol">
							<i class="fa fa-user"></i>
						</div>
						<div class="value white">
							<p class="sbold addr-font-h1" data-counter="counterup"
								data-value="<?php if (isset($hmember)) {
					echo $hmember;
				}else {
					echo "Data tidak muncul!";
				}?>">0</p>
							<p>Total Member</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="overview-panel deepPink-bgcolor">
						<div class="symbol">
							<i class="fa fa-book"></i>
						</div>
						<div class="value white">
							<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hbuku)) {
					echo $hbuku;
				}else {
					echo "Data tidak muncul!";
				}?>">0
							</p>
							<p>Total Buku</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-sm-6">
					<div class="overview-panel orange">
						<div class="symbol">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="value white">
							<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hpeminjaman)) {
					echo $hpeminjaman;
				}else {
					echo "Data tidak muncul!";
				}?>">0</p>
							<p>Total Peminjaman</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="overview-panel blue-bgcolor">
						<div class="symbol">
							<i class="fa fa-refresh fa-spin fa-1x"></i>
						</div>
						<div class="value white">
							<p class="sbold addr-font-h1" data-counter="counterup" data-value="<?php if (isset($hpengembalian)) {
					echo $hpengembalian;
				}else {
					echo "Data tidak muncul!";
				}?>">0</p>
							<p>Total Pengembalian </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end widget -->
		<!-- chart start -->
		<div class="row">
			<div class="col-md-8">
			<div class="card card-box">
					<div class="card-head">
						<header>Tambah Peminjam</header>
						
					</div>
					<div class="card-body" id="bar-parent">
						<form action="<?=base_url()?>cpeminjaman/form/add_save" method="post"
							id="form_sample_1" class="form-horizontal">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Member
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select class="form-control input-height" name="member_id">
											<?php foreach($qmember as $rm) {
                                                        
                                                            echo "<option value=".$rm->member_id." selected>".$rm->no_identitas." ".$rm->nama."</option>";
												
                                                        
                                                    }
                                                    ?>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-md-3">Buku
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select class="form-control input-height selectpicker" data-live-search="true" name="buku_id">
											<?php foreach($qbuku as $rb) {
                                                       
													   echo "<option value=".$rb->buku_id.">Sisa ".$rb->jumlah.' - '.$rb->judul."</option>";
													   
                                                     
                                                            
                                                    }
                                                    ?>
										</select>
									</div>
								</div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Jumlah 
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="jumlah_pinjam" data-required="1" placeholder="5"
                                            value="" class="form-control input-height" /> </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Status
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select class="form-control input-height selectpicker" data-live-search="true" name="status">
											<option value="Pinjam" selected>Pinjam</option>
											<option value="Kembali" >Kembali</option>
										</select>
									</div>
								</div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Keterangan Pinjam 
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="ket_pinjam" data-required="1" placeholder="Keterangan..."
                                            value="" class="form-control input-height" /> </div>
                                </div>

								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button name="submit" type="submit" class="btn btn-success m-r-20"><i
													class="fa fa-save"></i>
												Simpan</button><button class="btn btn-danger">
												Reset</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card card-box">
				<div class="card-head">
                                    <header>List Buku</header>
                                    
                                </div>
                                <div class="card-body no-padding height-9" style="overflow-y:scroll; height:458px;">
                                    <div class="row">
                                        <ul class="docListWindow">
										<?php foreach($qbuku as $qb) : ?>
                                            <li>
											<div class="prog-avatar">
                                                    <img src="<?=base_url()?>img/book.png" alt="">
                                                </div>
                                                <div class="details">
                                                    <div class="doctitle">
                                                        <?=$qb->judul?>
                                                    </div>
                                                        <div>
															<?php 
																if ($qb->jumlah > 0) {
																	echo '<span class="clsAvailable">Tersedia</span>';
																}else {
																	echo '<span class="clsNotAvailable">Tidak Tersedia</span>';
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