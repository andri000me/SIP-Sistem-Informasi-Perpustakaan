<!-- start page content -->
<div class="page-content-wrapper">
	<div class="page-content">
		<div class="page-bar">
			<div class="page-title-breadcrumb">
				<div class=" pull-left">
					<div class="page-title">Data Pengembalian</div>
				</div>
				<ol class="breadcrumb page-breadcrumb pull-right">
					<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li><a class="parent-item" href="index.php?page=penghuni">Data Pengembalian</a>&nbsp;<i
							class="fa fa-angle-right"></i>
					</li>
					<li class="active">Pengembalian</li>
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
											<table class="table table-hover table-checkable order-column full-width"
												id="example4" style="width:100%;">
												<thead>
													<tr>
														<th>No.</th>
														<th>Member</th>
														<th>Judul</th>
														<th>Jumlah</th>
														<th>Tanggal Pinjam</th>
														<th>Tanggal Kembali</th>
														<th>Status</th>
														
														
													</tr>
												</thead>
												<tbody>
													<?php if(empty($qpengembalian)) { ?>
													<tr>
														<td>John</td>
														<td colspan="6">-</td>
													</tr>
													<?php }else {
                $num = 0;
                foreach ($qpengembalian as $rowpengembalian) {
                $num++; ?>
													<tr>
														<td>
															<?=$num?>
														</td>
														<td>
															<?=$rowpengembalian->nama?>
														</td>
														<td>
															<i class="fa fa-book"></i> <?=$rowpengembalian->judul?>
														</td>
														
														<td>
															<?=$rowpengembalian->jumlah_pinjam?>
														</td>
														<td>
															<?php 
																$tstmp = strtotime($rowpengembalian->tgl_pinjam);
																echo $tgl_p = date('d-m-Y', $tstmp);
															?>
														</td>
														<td>
														<?php 
																$tstmp2 = strtotime($rowpengembalian->tgl_kembali);
																echo $tgl_k = date('d-m-Y', $tstmp2);
															?>
														</td>
														<td>
															<button id="btnPinjam" class="btn btn-circle btn-success btn-xs m-b-10"><?=$rowpengembalian->status?></button>
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