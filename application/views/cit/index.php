<div class="table-responsive">
<div class="pull-right">
	<a href="<?php echo site_url('cit/add'); ?>" class="btn btn-success" style="margin-left: 10px;">Add</a> 
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
	    <tr>
			<th>City Code</th>
			<th>City Name</th>
			<th>Actions</th>
	    </tr>	
	</thead>
	<tfoot>
	    <tr>
			<th>City Code</th>
			<th>City Name</th>
			<th>Actions</th>
	    </tr>	
	</tfoot>
	<tbody>
	<?php foreach($cit as $c){ ?>
    <tr>
		<td><?php echo $c['cit_id']; ?></td>
		<td><?php echo $c['cit_name']; ?></td>
		<td>
            <a href="<?php echo site_url('cit/edit/'.$c['cit_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('cit/remove/'.$c['cit_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>		
	</tbody>
</table>
</div>
