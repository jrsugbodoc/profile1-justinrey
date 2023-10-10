<div class="row pt-7">
	<div class="col-xl-12 col-lg-12 col-md-12">
		<div class="card mb-lg-0">
			<div class="card-header">
				<h3 class="card-title">Update Post</h3>
			</div>
			<div class="card-body">
				<div class="mt-2">
					<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>
					<?php echo validation_errors("<p class='bg-danger'>"); ?>
					<?php echo form_open('post/edit/'. $post_data->post_id .'', $attributes); ?>

					<div class="form-group">
					<?php echo form_label('Post Content'); ?>
                    <?php
                        $data = array(
                            'class' => 'form-control',
                            'name' => 'content',
                            'value' => $post_data->content
                        )
                    ?>
                    <?php echo form_textarea($data); ?>
					</div>
                        <div class="timelineleft-footer">
                            <div class="form-group" style="display: inline-block;">
                            <?php
                                $data = array(
                                    'class' => 'btn btn-primary',
                                    'name' => 'submit',
                                    'value' => 'Update'
                                )
                                ?>
                                <?php echo form_submit($data); ?>
                    
                            </div>
                            <div class="form-group" style="display: inline-block; margin-left: 10px;">
                            <?php
                                // Add a "Cancel" button here
                                $data = array(
                                    'class' => 'btn btn-secondary',
                                    'name' => 'cancel',
                                    'value' => 'Cancel',
                                    'onclick' => "window.location.href='" . base_url() . "post/edit/" . $post_data->post_id . "';"
                                );
                                echo form_submit($data);
                                ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
				</div>
			</div>
		</div>
	</div>
</div>
