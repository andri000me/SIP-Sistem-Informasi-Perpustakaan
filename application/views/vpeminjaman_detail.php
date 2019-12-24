<div class="container">
	<div>
    <h2>Data Peminjaman Detail</h2>
    </div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Peminjaman Id</th>
				<th>Member Id</th>
				<th>Buku Id</th>
				</tr>
		</thead>
		<tbody>
			<?php if(empty($qpeminjaman_detail)) { ?>
			<tr>
				<td>John</td>
				<td colspan="6">-</td>
			</tr>
			<?php }else {
                $num = 0;
                foreach ($qpeminjaman_detail as $rowpeminjaman_detail) {
                $num++; ?>
			<tr>
				<td>
					<?=$num?>
				</td>
				<td>
					<?=$rowpeminjaman_detail->peminjaman_id?>
				</td>
				<td>
					<?=$rowpeminjaman_detail->member_id?>
				</td>
				<td>
					<?=$rowpeminjaman_detail->buku_id?>
				</td>
				</tr>
			<?php }} ?>
		</tbody>
	</table>
</div>

