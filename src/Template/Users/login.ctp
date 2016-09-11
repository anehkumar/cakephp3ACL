<div class="users form">
	<?= $this->Flash->render('auth') ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-5">
				<?= $this->Form->create() ?>
				<fieldset>
					<legend><?= __('Please enter your username and password') ?></legend>
					<?= $this->Form->input('username') ?>
					<?= $this->Form->input('password') ?>
				</fieldset>
				<div class="text-center">
				<?= $this->Form->button(__('Login')); ?>
				</div>
				<?= $this->Form->end() ?> 
			</div>
			<div class="col-md-3"></div>
		</div>
		
	</div>
</div>