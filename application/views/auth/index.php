<div id="grid_padding" class="grid_11" >
        
<div class="table_list">
    <table class="table" cellspacing="0" cellpadding="0">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>    
             <th>Created On</th>          
            <th>Status/Action</th>
        </tr>

<?php
$serial=1;
 foreach ($users as $user):?>
		<tr>
			<td><?php echo $user->first_name;?></td>
			<td><?php echo $user->last_name;?></td>
            <td><?php echo $user->email;?></td>
			<td><?php echo $user->phone;?></td>
            <td><?php echo date('d-m-Y H:i:s',$user->created_on);?></td>
<td>		
<?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?> |
<?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?>
</td>
		</tr>
	<?php 
$serial++;
endforeach;?>
        
        
        </table>

</div>
    </div>
    <div style="clear: both;"></div>
    </div>            </div>
        </div>
