<?php /* SVN FILE: $Id: admin_edit.ctp 600 2008-08-07 17:55:23Z AD7six $ */ ?>
<h1>Comments -  edit Comment </h1>
<div class="form-container">
<?php
$action = in_array($this->action, array('add', 'admin_add'))?'Add':'Edit';
$action = Inflector::humanize($action);
echo $form->create();
echo $form->inputs(array(
	'legend' => false,
	'id',
	'node_id' => array('empty' => true),
	'user_id' => array('empty' => true),
	'class',
	'lang',
	'title',
	'author',
	'email',
	'url',
	'body',
	'published',
));
echo $form->end('Submit');
?></div>