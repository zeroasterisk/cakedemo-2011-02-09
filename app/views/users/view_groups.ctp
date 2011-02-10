<div class="users view">
<h2><?php echo $user['User']['username']; ?>'s Groups</h2>
<?php echo $user['User']['first_name']; ?> /
<?php echo $user['User']['last_name']; ?> /
<?php echo $user['User']['email']; ?><br/>

<?php foreach($user['Group'] as $group): ?>
	<?php echo $group['name']; ?> :) 
<?php endforeach; ?>
<?php echo $this->Html->link('View User Details', array('action' => 'view', $user['User']['id'])); ?><br/>
<?php echo $this->Html->link('View Items', array('action' => 'view_items', $user['User']['id'])); ?><br/>


</div>
