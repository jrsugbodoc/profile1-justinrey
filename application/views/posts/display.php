<div class="row pt-7">
	<div class="col-xl-12 col-lg-12 col-md-12 ">
		<div class="card overflow-hidden">
			<div class=" card-body ">
				<div class="item7-card-desc d-md-flex mb-5 ">
				<?php echo "<a href='" . base_url() . "post/index' class='btn btn-white text-black btn-sm mr-5'>" ?>
    				<i class="fa fa-arrow-left" data-toggle="tooltip" title="" data-original-title="Go Back"></i>
					</a>
					<div class="d-flex mr-3 mb-2 mt-2" ><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg"
							height="18" viewBox="0 0 24 24" width="18">
							<path d="M0 0h24v24H0V0z" fill="none" />
							<path
								d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
							<path d="M4 5.01h16V8H4z" opacity=".3" /></svg>
							<?php
							$timestamp = strtotime($post_data->time_posted);
							$formatted_date = date(' M. d Y', $timestamp);
							?>
						<div class="mt-0"><?php echo $formatted_date; ?></div>
					</div>
					<div class="d-flex mb-2 mt-2"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg" height="18"
							viewBox="0 0 24 24" width="18">
							<path d="M0 0h24v24H0V0z" fill="none"></path>
							<path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"></path>
							<circle cx="12" cy="8" opacity=".3" r="2"></circle>
							<path
								d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z">
							</path>
						</svg>
						<div class="mt-0"><?php echo $post_name; ?></div>
					</div>
					<div class="ml-auto mb-2">
						<a class="mr-0 d-flex" href="#"><svg class="svg-icon mr-2" xmlns="http://www.w3.org/2000/svg"
								height="18" viewBox="0 0 24 24" width="18">
								<path d="M0 0h24v24H0V0z" fill="none" />
								<path d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"
									opacity=".3" />
								<path
									d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z" />
							</svg>
							<div class="mt-0">12 Comments</div>
						</a>
					</div>
				</div>
				<?php if ($post_data->category === 'text'): ?>
					<p>
						<?php echo $post_data->content;?>
					</p>
				<?php else: ?>
					<?php $video_id = get_youtube_video_id($post_data->link); ?>
					<?php if ($video_id): ?>
					<strong><?php echo ($post_data->content); ?></strong>
					<br><br>
					<div class="embed-responsive embed-responsive-16by9 w-75">
						<iframe class="embed-responsive-item"
							src="https://www.youtube.com/embed/<?php echo $video_id; ?>"
							allowfullscreen></iframe>
					</div>
					<?php endif;?>
				
				
				<?php endif; ?>
				<div class="media py-3 mt-0 border-top">
					<?php if ($allow_edit_delete): ?>
					<div class="timelineleft-footer">
						<?php echo "<a href='" . base_url() . "post/edit/" . $post_data->post_id . "' class='btn btn-primary text-white btn-sm'>Edit</a>"; ?>
						<?php echo "<a href='" . base_url() . "post/delete/" . $post_data->post_id . "' class='btn btn-secondary text-white btn-sm'>Delete</a>"; ?>
					</div>
					<?php endif; ?>
					<div class="ml-auto">
						<div class="d-flex">
							<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2"
									xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path
										d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z"
										opacity=".3" />
									<path
										d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z" />
								</svg></a>
							<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mr-3 mt-2"
									xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path
										d="M20 17.17V4H4v12h14.83L20 17.17zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"
										opacity=".3" />
									<path
										d="M4 18h14l4 4-.01-18c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM4 4h16v13.17L18.83 16H4V4zm2 8h12v2H6zm0-3h12v2H6zm0-3h12v2H6z" />
								</svg></a>
							<a class="new" href="JavaScript:void(0);"><svg class="svg-icon mt-2"
									xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<circle cx="18" cy="5" opacity=".3" r="1" />
									<circle cx="6" cy="12" opacity=".3" r="1" />
									<circle cx="18" cy="19.02" opacity=".3" r="1" />
									<path
										d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92zM18 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm12 7.02c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z" />
								</svg></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
