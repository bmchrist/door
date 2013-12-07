<?php $this->load->view('layout/header'); ?>

<div class="user_list">
<?php foreach($users as $user): ?>
	<div class="user<?php echo $user->id?>">
		<div class="<?php echo $user->home ? '' : 'inactive ' ;?>color<?php echo $user->color;?> status"></div>
		<span class="name"><?php echo $user->name ?></span>
	</div>
<?php endforeach; ?>
</div>

<?php $this->load->view('layout/footer'); ?>