<?php $this->load->view('layout/header'); ?>
<div>
	<img class="webcam" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>:8080/?action=stream"/>
</div>
<?php $this->load->view('layout/footer'); ?>
