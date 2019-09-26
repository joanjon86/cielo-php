<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- jQuery core JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap core JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container border bg-light">
	<div class="clearfix">&nbsp;</div>
	<div class="form-group row justify-content-md-center">
		<span class="font-weight-bold">Name:&nbsp;&nbsp;</span>
		<?php echo $cielo_item['name']; ?>
	</div>
	<div class="form-group row justify-content-md-center" >
		<span class="font-weight-bold">Date of Birth:&nbsp;&nbsp;</span>
		<?php echo date_format(new DateTime($cielo_item['birthday']), 'm/d/Y'); ?>
	</div>
	<div class="form-group row justify-content-md-center">
		<span class="font-weight-bold">Email:&nbsp;&nbsp;</span>
		<?php echo $cielo_item['email']; ?>
	</div>
	<div class="form-group row justify-content-md-center">
		<span class="font-weight-bold">Favorite Color:&nbsp;&nbsp;</span>
		<input type="color" disabled value="<?php echo $cielo_item['favorite_color']; ?>"/>
	</div>
	<div class="form-group row justify-content-md-center">
		<a class="btn btn-primary btn-lg" href="<?=base_url()?>">BACK</a>
	</div>
</div>
