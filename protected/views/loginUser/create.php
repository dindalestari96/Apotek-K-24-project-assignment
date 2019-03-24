<?php
/* @var $this LoginUserController */
/* @var $model LoginUser */

$this->breadcrumbs=array(
	'Login Users'=>array('index'),
	'Create',
);


?>

<h1>Create LoginUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>