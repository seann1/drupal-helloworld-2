<div class="container">
	<div class="container-fluid">
		<div class="black-header">
			<div class="row">
				<div class="medium-2 columns">
					<?php if ($logo): ?>
			      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			      </a>
			    <?php endif; ?>
		  	</div>

		  	<div class="medium-10 columns">

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
			<div class="medium-8 columns">
				<?php print render($page['content']); ?>
			</div>
			<div class="medium-4 columns">
				<div class="sidebar">
	    	<?php print render($page['sidebar_second']); ?>
	    </div>
	  	</div>
		</div>
	</div>
</div>