<div class="users view">
<h2><?php echo $user['User']['username']; ?></h2>
<?php echo $user['User']['first_name']; ?> /
<?php echo $user['User']['last_name']; ?> /
<?php echo $user['User']['email']; ?><br/>

<?php if (isset($viewstyle) && $viewstyle=="all"): ?>
	<?php echo $this->Html->link('less', array('action' => 'view', $user['User']['id'], 'less')); ?><br/>
	<h4>Group</h4>
	<?php foreach($user['Group'] as $group): ?>
		<?php echo $group['name']; ?><br/> 
	<?php endforeach; ?>
	<h4>Item</h4>
	<?php foreach($user['Item'] as $item): ?>
		<?php echo $item['name']; ?><br/> 
	<?php endforeach; ?>
<?php else: ?>
	<a href="/users/view/<?php echo $user['User']['id']; ?>/all">more</a><br/>
<?php endif; ?>


<?php echo $this->Html->link('View Groups', array('action' => 'view_groups', $user['User']['id'])); ?><br/>
<?php echo $this->Html->link('View Items', array('action' => 'view_items', $user['User']['id'])); ?><br/>


</div>
