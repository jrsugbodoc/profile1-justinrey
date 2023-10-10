<div class="row pt-7">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card mb-lg-0">
			<div class="card-header">
				<h3 class="card-title">Add a Post</h3>
			</div>
			<div class="card-body">
				<div class="mt-2">
					<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>
					<?php echo form_open('post/create', $attributes); ?>
					<div class="form-group">
						<?php echo form_label('Add your link here'); ?>
						<?php
                        $data = array(
                            'class' => 'form-control',
                            'name' => 'link',
							'rows' => 1
						);
						echo form_error('link', '<div class="text-danger">', '</div>');
                        ?>
						<?php echo form_textarea($data); ?>
					</div>
					<div class="form-group">
						<?php echo form_label('Post Content'); ?>
						<?php echo form_error('check_non_empty', '<div class="text-danger">', '</div>'); ?>
						<?php
                        $data = array(
                            'class' => 'form-control',
                            'name' => 'content'
						);
                        ?>
						<?php echo form_textarea($data); ?>
					</div>
					<div class="timelineleft-footer">
						<div class="form-group" style="display: inline-block;">
							<?php
                        $data = array(
                            'class' => 'btn btn-primary',
                            'name' => 'submit',
                            'value' => 'Add Post'
                        )
                        ?>
							<?php echo form_submit($data); ?>
						</div>
						<div class="form-group" style="display: inline-block; margin-left: 10px;">
							<a href="<?php echo base_url() . 'post/index'; ?>" class="btn btn-secondary">Cancel</a>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
