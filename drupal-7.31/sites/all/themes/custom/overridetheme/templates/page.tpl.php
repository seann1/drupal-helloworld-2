<div class="container">
		<div class="black-header">
			<div class="row">
				<div class="col-md-2">
					<?php if ($logo): ?>
			      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			      </a>
			    <?php endif; ?>
		  	</div>

		  	<div class="col-md-10">

			 		<?php if ($logged_in): ?>
					  <?php print render($page['user_menu']); ?>
					<?php else: ?>
					  <li>
					  	<a href="<?php base_path(); ?>user/login">Log In</a>
					  </li>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<?php print render($page['content']); ?>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
	    	<?php print render($page['sidebar_second']); ?>
	    </div>
	  	</div>
		</div>
</div>