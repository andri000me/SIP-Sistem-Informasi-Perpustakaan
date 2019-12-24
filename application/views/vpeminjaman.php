<?php
function denda($tgl_dateline, $tgl_kembali)
{

	$tgl_dateline_pcs = explode("-", $tgl_dateline);
	$tgl_dateline_pcs = $tgl_dateline_pcs[2] . "-" . $tgl_dateline_pcs[1] . "-" . $tgl_dateline_pcs[0];

	$tgl_kembali_pcs = explode("-", $tgl_kembali);
	$tgl_kembali_pcs = $tgl_kembali_pcs[2] . "-" . $tgl_kembali_pcs[1] . "-" . $tgl_kembali_pcs[0];

	$selisih = strtotime($tgl_kembali_pcs) - strtotime($tgl_dateline_pcs);

	$selisih = $selisih / 86400;

	if ($selisih >= 1) {
		$hasil_tgl = floor($selisih);
	} else {
		$hasil_tgl = 0;
	}
	return $hasil_tgl;
}

?>
<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Data Peminjaman</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item" href="index.php?page=penghuni">Data Peminjaman</a>&nbsp;<i class="fa fa-angle-right"></i>
					</li>
					<li class="active">Peminjaman</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tab-content">
					<div class="tab-pane active fontawesome-demo" id="tab1">
						<div class="row">
							<div class="col-md-12">
								<div class="card card-topline-red">
									<div class="card-head">
										<header></header>
										<div class="tools">
											<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
											<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
											<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
										</div>
									</div>
									<div class="card-body ">
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="btn-group">
													<a href="<?= base_url() ?>cpeminjaman/form/add" id="addRow" class="btn btn-info">
														Tambah <i class="fa fa-plus"></i>
													</a>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<div class="btn-group pull-right">
													<!-- <a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                                        data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </a> -->
													<ul class="dropdown-menu pull-right">
														<li>
															<a href="javascript:;">
																<i class="fa fa-print"></i> Print </a>
														</li>
														<li>
															<a href="javascript:;">
																<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
														</li>
														<li>
															<a href="javascript:;">
																<i class="fa fa-file-excel-o"></i> Export to Excel </a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="table-scrollable">
											<table class="table table-hover table-checkable order-column full-width" id="example4" style="width:100%;">
												<thead>
													<tr>
														<th>No.</th>
														<th>Member</th>
														<th>Judul</th>
														<th>Jumlah</th>
														<th>Tanggal Pinjam</th>
														<th>Tanggal Kembali</th>
														<th>Status</th>
														<th>Denda</th>
														<th>Keterangan</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php if (empty($qpeminjaman)) { ?>
														<tr>
															<td>Kosong</td>
															<td colspan="6">-</td>
														</tr>
														<?php } else {
															$num = 0;
															foreach ($qpeminjaman as $rowpeminjaman) {
																$num++; ?>
															<tr>
																<td>
																	<?= $num ?>
																</td>
																<td>
																	<?= $rowpeminjaman->nama ?>
																</td>
																<td><a href="<?= base_url() ?>cbuku/detail_buku/<?= $rowpeminjaman->buku_id ?>"><?= $rowpeminjaman->judul ?></a>
																</td>

																<td>
																	<?= $rowpeminjaman->jumlah_pinjam ?>
																</td>
																<td>
																	<?php
																			$tstmp = strtotime($rowpeminjaman->tgl_pinjam);
																			echo $tgl_p = date('d-m-Y', $tstmp);
																			?>
																</td>
																<td>
																	<?php
																			$tstmp2 = strtotime($rowpeminjaman->tgl_kembali);
																			echo $tgl_k = date('d-m-Y', $tstmp2);
																			?>
																</td>
																<td>
																	<button id="btnPinjam" class="btn btn-circle btn-info btn-xs m-b-10"><?= $rowpeminjaman->status ?></button>
																</td>
																<td id="tlt">
																	<?php
																			$denda = 500;
																			$tgl_hrskmbl = $rowpeminjaman->tgl_kembali;
																			$tgl_kmbl = date('Y-m-d');
																			$telat =
																				denda($tgl_hrskmbl, $tgl_kmbl);
																			$dendanya = $telat * $denda;
																			if ($telat > 0) {
																				echo "<center><b><font color='#f5707a'>$telat hari &nbsp | &nbsp(Rp. $denda,- x $telat) = Rp. $dendanya,-</font></b></center>";
																			} else {
																				echo "<center><b><font color='#188ae2'> $telat hari &nbsp | &nbsp Baru Meminjam</font></b></center>";
																			}
																			?>
																</td>
																<td>
																	<?= $rowpeminjaman->ket_pinjam ?>
																</td>
																<td>
																	<div class="btn-group">
																		<a href="<?= base_url() ?>cpeminjaman/form/upd_pengembalian/<?= $rowpeminjaman->peminjaman_id ?>" class="btn btn-warning" title="Pengembalian" role="button">
																			<span class="fa fa-refresh"></span></a>
																		<a href="<?= base_url() ?>cpeminjaman/form/upd/<?= $rowpeminjaman->peminjaman_id ?>" class="btn btn-primary ml-2" title="Edit" role="button">
																			<span class="fa fa-pencil"></span></a>
																		<a href="<?= base_url() ?>cpeminjaman/del/<?= $rowpeminjaman->peminjaman_id ?>" class="btn btn-danger ml-2" onclick="return confirm('Delete peminjam <?= $rowpeminjaman->nama ?>')" title="Hapus" role="button">
																			<span class="fa fa-trash"></span></a>
																	</div>
																</td>
															</tr>
													<?php }
													} ?>
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
</div>

<!-- <script>

var btn_pinjam = document.getElementById('btnPinjam').value;
var telate = document.getElementById('tlt').textContent;
var ganti;

if (telate === '0 hari &nbsp | &nbsp Baru Meminjam') {
	document.getElementById('btnPinjam').className = "btn btn-circle btn-info btn-xs m-b-10";
}else {
	document.getElementById('btnPinjam').className = "btn btn-circle btn-warning btn-xs m-b-10";
}

</script> -->