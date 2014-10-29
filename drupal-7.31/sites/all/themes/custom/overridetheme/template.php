<?php
	function overridetheme_form_alter(&$form, &$form_state, $form_id) {
	  if (!empty($form['actions']) && $form['actions']['submit']) {
	    $form['actions']['submit']['#attributes'] = array('class' => array('first', 'btn', 'btn-default'));
	  }
	}


