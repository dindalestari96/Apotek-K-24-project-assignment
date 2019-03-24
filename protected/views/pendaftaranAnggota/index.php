<?php
/* @var $this PendaftaranAnggotaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendaftaran Anggotas',
);


?>

<h1>Pendaftaran Anggotas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
