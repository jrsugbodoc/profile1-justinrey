<body class="h-100vh page-style1 light-mode default-sidebar">
	<div class="page">
		<div class="page-single">
			<div class="container">
				<div class="row">
					<div class="col mx-auto">
						<div class="row justify-content-center">
							<div class="col-md-7 col-lg-5">
								<div class="card card-group mb-0">
									<div class="card p-1">
										<div class="card-body">
											<div class="text-center title-style mb-6">
												<h1 class="mb-2">Register</h1>
												<hr>
												<p class="text-muted">Create New Account</p>
											</div>
											<div class="container">
												<?php $attributes = array('id' => 'register_form', 'class' => 'form_horizontal'); ?>
												<?php echo validation_errors("<p class='bg-danger'>"); ?>
												<?php echo form_open('users/register', $attributes); ?>
												<div class="row justify-content-around">
													<div class="form-group col">
														<?php echo form_label('First Name'); ?>
														<?php
																$data = array(
																	'class' => 'form-control',
																	'name' => 'first_name',
																	'placeholder' => 'Enter First Name',
																)
																?>
														<?php echo form_input($data); ?>
													</div>

													<div class="form-group col">
														<?php echo form_label('Last Name'); ?>
														<?php
																$data = array(
																	'class' => 'form-control',
																	'name' => 'last_name',
																	'placeholder' => 'Enter Last Name',
																)
																?>
														<?php echo form_input($data); ?>
													</div>
												</div>
												<div class="row justify-content-around">
													<div class="form-group">
														<?php echo form_label('Email'); ?>
														<?php
																$data = array(
																	'class' => 'form-control',
																	'name' => 'email',
																	'placeholder' => 'Enter Email',
																)
																?>
														<?php echo form_input($data); ?>
													</div>
													<div class="form-group">
														<?php echo form_label('Username'); ?>
														<?php
																$data = array(
																	'class' => 'form-control',
																	'name' => 'username',
																	'placeholder' => 'Enter Username',
																)
																?>
														<?php echo form_input($data); ?>
													</div>
												</div>
												<div class="form-group">
													<?php echo form_label('Password'); ?>
													<?php
															$data = array(
																'class' => 'form-control',
																'name' => 'password',
																'placeholder' => 'Enter Password',
															)
															?>
													<?php echo form_password($data); ?>
												</div>
												<div class="form-group">
													<?php echo form_label('Confirm Password'); ?>
													<?php
															$data = array(
																'class' => 'form-control',
																'name' => 'confirm_password',
																'placeholder' => 'Confirm Password',
															)
															?>
													<?php echo form_password($data); ?>
												</div>

												<div class="row">
													<div class="col-12">
														<?php
																$data = array(
																	'class' => 'btn btn-lg btn-primary btn-block px-4',
																	'value' => 'Create a new account',
																);
																?>
														<?php echo form_submit($data); ?>
													</div>
												</div>
												<?php echo form_close(); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="text-center pt-4">
									<div class="font-weight-normal fs-16">You Already have an account <a
											class="btn-link font-weight-normal" href="#">Login Here</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
