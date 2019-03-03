<div class="table-responsive">
<div class="pull-right">
	<a href="<?php echo site_url('stum/add'); ?>" class="btn btn-success" style="margin-left: 10px;">Add</a> 
</div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
	<tr>
		<th>State Code</th>
		<th>State Name</th>
		<th>Actions</th>
    </tr>	
</thead>
<tfoot>
	<tr>
		<th>State Code</th>
		<th>State Name</th>
		<th>Actions</th>
    </tr>		
</tfoot>
<tbody>
	<?php foreach($sta as $s){ ?>
    <tr>
		<td><?php echo $s['sta_id']; ?></td>
		<td><?php echo $s['sta_name']; ?></td>
		<td>
            <a href="<?php echo site_url('stum/edit/'.$s['sta_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('stum/remove/'.$s['sta_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>	
</tbody>
</table>
</div>
