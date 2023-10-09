<body class="h-100vh page-style1 light-mode default-sidebar">
	<div class="page">
		<div class="page-single">
			<div class="container">
				<div class="row">
					<div class="col mx-auto">
						<div class="row justify-content-center">
							<div class="col-md-7 col-lg-5">
								<div class="card card-group mb-0">
									<div class="card p-4">
										<div class="card-body">
											<div class="text-center title-style mb-6">
												<h1 class="mb-2">Login</h1>
												<hr>
												<p class="text-muted">Sign In to your account</p>
											</div>

											<?php
                                            // Open the CodeIgniter form
                                            $attributes = array('id' => 'login_form', 'class' => 'form_horizontal');
                                            echo form_open('users/login', $attributes);
                                            ?>

											<div class="form-group">
												<?php
                                                // Generate the username input field
                                                echo form_label('Username');
                                                $data = array(
                                                    'class' => 'form-control',
                                                    'name' => 'username',
                                                    'placeholder' => 'Enter Username'
                                                );
                                                echo form_input($data);
                                                ?>
											</div>

											<div class="form-group">
												<?php
                                                // Generate the password input field
                                                echo form_label('Password');
                                                $data = array(
                                                    'class' => 'form-control',
                                                    'name' => 'password',
                                                    'placeholder' => 'Enter Password'
                                                );
                                                echo form_password($data);
                                                ?>
											</div>

											<div class="form-group">
												<?php
                                                // Generate the Login button
                                                $data = array(
                                                    'class' => 'btn btn-lg btn-primary btn-block',
                                                    'name' => 'submit',
                                                    'value' => 'Login'
                                                );
                                                echo form_submit($data, 'Login');
                                                ?>
											</div>
											
                                            // Close the CodeIgniter form
                                            <?php echo form_close(); ?>
                                            
											<div class="col-12">
												<a href="<?php echo base_url('pages/forgot-password-1'); ?>"
													class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
											</div>
											<p class="bg-success">
												<?php if($this->session->flashdata('user_registered')): ?>
												<?php echo $this->session->flashdata('user_registered')?>
												<?php endif; ?>
											</p>
											<p class="bg-danger">
												<?php if($this->session->flashdata('login_failed')): ?>
												<?php echo $this->session->flashdata('login_failed')?>
												<?php endif; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="text-center pt-4">
									<div class="font-weight-normal fs-16">You Don't have an account <a
											class="btn-link font-weight-normal"
											href="<?php echo base_url();?>/home/register1">Register Here</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
