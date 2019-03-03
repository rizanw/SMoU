<div class="table-responsive">
<div class="pull-right">
	<a href="<?php echo site_url('mutual/add'); ?>" class="btn btn-success" style="margin-left: 10px;">Add</a> 
</div>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
    <tr>
		<th>Mutual Cooperation Code</th>
		<th>Mutual Cooperation Name</th>
		<th>Actions</th>
    </tr>		
	</thead>
	<tfoot>
    <tr>
		<th>Mutual Cooperation Code</th>
		<th>Mutual Cooperation Name</th>
		<th>Actions</th>
    </tr>		
	</tfoot>
	<tbody>
	<?php foreach($m_mutual as $m){ ?>
    <tr>
		<td><?php echo $m['m_mut_id']; ?></td>
		<td><?php echo $m['m_mut_name']; ?></td>
		<td>
            <a href="<?php echo site_url('m_mutual/edit/'.$m['m_mut_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('m_mutual/remove/'.$m['m_mut_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</tbody>
</table>
</div>
