<?php
/* @var $this LoginUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Login Users',
);


?>

<h1>Login Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
