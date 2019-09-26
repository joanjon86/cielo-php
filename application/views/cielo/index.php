<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- jQuery core JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap core JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Personal JS -->
<script src="assets/js/index.js"></script>


<div class="container">

	<?php if($this->session->flashdata('msg')): ?>
		<div class="text-center alert alert-success" role="alert"><?php echo $this->session->flashdata('msg'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('msg-error')): ?>
		<div class="text-center alert alert-danger" role="alert"><?php echo $this->session->flashdata('msg-error'); ?></div>
	<?php endif; ?>

	<h1 class="text-center">CIELO</h1>

	<a class="btn btn-primary btn-lg" href="<?php echo site_url('cielo/create'); ?>">NEW</a>
	<div class="clearfix">&nbsp;</div>

	<div class="row">
		<div class="col border bg-light text-center">
			<h4>NAME</h4>
		</div>
		<div class="col border bg-light text-center">
			<h4>EMAIL</h4>
		</div>
		<div class="col border bg-light text-center">
		</div>
	</div>

	<?php foreach ($cielo as $cielo_item): ?>

		<div class="row" id="list">
			<div class="col border bg-light" >
				<?php echo $cielo_item['name']; ?>
			</div>
			<div class="col border bg-light">
				<?php echo $cielo_item['email']; ?>
			</div>
			<div class="col border bg-light text-center">
				<a href="<?php echo site_url('cielo/'.$cielo_item['id']); ?>" class="btn btn-secondary">View</a>
				<a href="<?php echo site_url('cielo/update/'.$cielo_item['id']); ?>" class="btn btn-warning">Update</a>
				<a href="<?php echo $cielo_item['id']; ?>" class="ciDelete btn btn-danger">Delete</a>
			</div>
		</div>

	<?php endforeach; ?>
</div>
