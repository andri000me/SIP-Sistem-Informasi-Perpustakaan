<?php


if($act == 'add_save') {
    $peminjaman_id = "";
    $member_id ="";
    $buku_id = "";
    $jumlah_pinjam = "";
    $status = "";
    $ket_pinjam = "";
    }elseif ($act == 'upd_save') {
    foreach ($qdetpeminjaman as $rowdetpeminjaman) {
        $peminjaman_id = $rowdetpeminjaman->peminjaman_id;
        $member_id = $rowdetpeminjaman->member_id;
        $buku_id = $rowdetpeminjaman->buku_id;
        $jumlah_pinjam = $rowdetpeminjaman->jumlah_pinjam;
        $status = $rowdetpeminjaman->status;
        $ket_pinjam = $rowdetpeminjaman->ket_pinjam;
        
    }
}



?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title"><?=$title?></div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index-2.html">Home</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item" href="<?=base_url()?>cpeminjaman">Data Peminjaman</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li class="active"><?=$title?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="card card-box">
					<div class="card-head">
						<header>Informasi Data</header>
						<button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
							data-upgraded=",MaterialButton">
							<i class="material-icons">more_vert</i>
						</button>
						<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
							data-mdl-for="panel-button">
							<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
							<li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
							<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
						</ul>
					</div>
					<div class="card-body" id="bar-parent">
						<form action="<?=base_url()?>cpeminjaman/form/<?=$act?>/<?=$peminjaman_id?>" method="post"
							id="form_sample_1" class="form-horizontal">
							<div class="form-body">
								<div class="form-group row">
									<label class="control-label col-md-3">Member
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
										<select class="form-control input-height" name="member_id">
											<?php foreach($qmember as $rm) {
                                                        if ($rm->member_id == $member_id) {
                                                            echo "<option value=".$rm->member_id." selected>".$rm->no_identitas." ".$rm->nama."</option>";
                                                        }else {
                                                            echo "<option value=".$rm->member_id.">".$rm->no_identitas." ".$rm->nama."</option>";
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
									<div class="col-md-5">
										<select class="form-control input-height selectpicker" data-live-search="true" name="buku_id">
											<?php foreach($qbuku as $rb) {
                                                        if ($rb->buku_id == $buku_id) {
                                                            echo "<option value=".$rb->buku_id." selected>Sisa ".$rb->jumlah.' - '.$rb->judul."</option>";
                                                        }else {
                                                            echo "<option value=".$rb->buku_id.">Sisa ".$rb->jumlah.' - '.$rb->judul."</option>";
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
                                    <div class="col-md-5">
                                        <input type="text" name="jumlah_pinjam" data-required="1" placeholder="5"
                                            value="<?=$jumlah_pinjam?>" class="form-control input-height" /> </div>
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
                                            value="<?=$ket_pinjam?>" class="form-control input-height" /> </div>
                                </div>

								<div class="form-actions">
									<div class="row">
										<div class="offset-md-3 col-md-9">
											<button name="submit" type="submit" id="btnSave" class="btn btn-success m-r-20"><i
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
		</div>
	</div>
</div>