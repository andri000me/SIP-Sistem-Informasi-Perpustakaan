<!DOCTYPE html>
<html lang="en">
<head>
	<title>Praktek CI UMP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.min.css">
</head>

<body onload="window.print();return false">
    <div class="container">
	<h2>Data Buku</h2>
    </div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Id Buku</th>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				</tr>
		</thead>
		<tbody>
			<?php if(empty($qbuku)) { ?>
			<tr>
				<td>John</td>
				<td colspan="6">-</td>
			</tr>
			<?php }else {
                $num = 0;
                foreach ($qbuku as $rowbuku) {
                $num++; ?>
			<tr>
				<td>
					<?=$num?>
				</td>
				<td>
					<?=$rowbuku->buku_id?>
				</td>
				<td>
					<?=$rowbuku->kode_buku?>
				</td>
				<td>
					<?=$rowbuku->judul?>
				</td>
				</tr>
			<?php }} ?>
		</tbody>
	</table>
</div>