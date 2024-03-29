<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>Sign In</h1>
		<?php if(count($errors) > 0): ?>
		<div class="alert alert-danger">
			<?php foreach($errors->all() as $error): ?>
				<p><?php echo e($error); ?></p>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<form action="<?php echo e(route('user.signin')); ?>" method="post">
			<div class="form-group">
				<label for="email">E-Mail</label>
				<input type="text" id="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" id="password" name="password" class="form-control">
			</div>
			<button type="submit" class="btn btn-primary">Sign In</button>
			<?php echo e(csrf_field()); ?>

		</form>
		<p>Dont Have An Account ? <a href="<?php echo e(route('user.signup')); ?>">Sign Up</a></p>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>