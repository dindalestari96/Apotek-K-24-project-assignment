<?php
/* @var $this PendaftaranAnggotaController */
/* @var $model PendaftaranAnggota */

$this->breadcrumbs=array(
	'Pendaftaran Anggotas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PendaftaranAnggota', 'url'=>array('index')),
	array('label'=>'Create PendaftaranAnggota', 'url'=>array('create')),
	array('label'=>'View PendaftaranAnggota', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PendaftaranAnggota', 'url'=>array('admin')),
);
?>

<h1>Update PendaftaranAnggota <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>