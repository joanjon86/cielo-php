<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- jQuery core JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- Bootstrap core JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Personal JS -->
<script src="../../assets/js/create.js"></script>
<script src="../../assets/js/form-validation.js"></script>


<div class="container border bg-light">

	<div class="text-center" role="alert" id="message"></div>


	<h2 class="text-center">NEW</h2>

	<?php echo validation_errors(); ?>

	<?php echo form_open('cielo/createSubmit', array('id' => 'ciForm')); ?>
		<div class="form-group row justify-content-md-center">
			<label for="name" class="col-sm-2 col-form-label font-weight-bold">Name</label>
			<div class="col-sm-4">
				<input type="text" name="name" id="name" class="form-control" />
			</div>
		</div>
		<div class="form-group row justify-content-md-center">
			<label for="birthday" class="col-sm-2 col-form-label font-weight-bold">Birthday</label>
			<div class="col-sm-4">
				<input type="date" name="birthday" id="birthday" class="form-control" />
			</div>
		</div>
		<div class="form-group row justify-content-md-center">
			<label for="email" class="col-sm-2 col-form-label font-weight-bold">Email</label>
			<div class="col-sm-4">
				<input type="text" name="email" id="email" class="form-control" />
			</div>
		</div>
		<div class="form-group row justify-content-md-center">
			<label for="favorite_color" class="col-sm-2 col-form-label font-weight-bold">Favorite Color</label>
			<div class="col-sm-4">
				<input type="color" name="favorite_color" id="favorite_color" class="form-control" />
			</div>
		</div>
		<div class="form-group row justify-content-md-center">
			<button class="btn btn-success" type="submit" name="submit" >Submit</button>
			&nbsp;
			<a class="btn btn-secondary" href="<?=base_url() ?>">BACK</a>
		</div>

	</form>
</div>
