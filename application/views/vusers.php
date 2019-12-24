<div class="container">
	<div>
    <h2>Data Users</h2>
    <a href="<?=base_url()?>cusers/form/add"><button class="btn btn-small btn-info float-right">Add New</button></a>
    
    </div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Id Users</th>
				<th>Username</th>
				<th>password</th>
                <th>Action</th>
				</tr>
		</thead>
		<tbody>
			<?php if(empty($qusers)) { ?>
			<tr>
				<td>Data kosong</td>
				<td colspan="6">-</td>
			</tr>
			<?php }else {
                $num = 0;
                foreach ($qusers as $u) {
                $num++; ?>
			<tr>
				<td>
					<?=$num?>
				</td>
				<td>
					<?=$u->Id?>
				</td>
				<td>
					<?=$u->username?>
				</td>
				<td>
					<?=$u->password?>
				</td>
				<td>
                    <div class="btn-group">
                        <a href="<?=base_url()?>cmember/form/upd/<?=$u->Id?>" class="btn btn-primary" role="button">
                        <span class="glyphicon glyphicon-pencil">Update</span></a>
                        <a href="<?=base_url()?>cmember/del/<?=$u->Id?>" class="btn btn-danger ml-2" onclick="return confirm('Delete all about <?=$u->username?>')" role="button">
                        <span class="glyphicon glyphicon-pencil">Delete</span></a>
                    </div>
                </td>
			</tr>
			<?php }} ?>
		</tbody>
	</table>
</div>

