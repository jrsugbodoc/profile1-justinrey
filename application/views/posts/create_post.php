<div class="row pt-7">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card mb-lg-0">
			<div class="card-header">
				<h3 class="card-title">Add a Post</h3>
			</div>
			<div class="card-body">
				<div class="mt-2">
					<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>
					<?php echo validation_errors("<p class='bg-danger'>"); ?>
					<?php echo form_open('post/create', $attributes); ?>
					<div class="form-group">
						<?php echo form_label('Post Content'); ?>
						<?php
                        $data = array(
                            'class' => 'form-control',
                            'name' => 'content'
                        )
                        ?>
						<?php echo form_textarea($data); ?>
					</div>
					<div class="form-group">
						<?php
                        $data = array(
                            'class' => 'btn btn-primary',
                            'name' => 'submit',
                            'value' => 'Add Post'
                        )
                        ?>
						<?php echo form_submit($data); ?>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
