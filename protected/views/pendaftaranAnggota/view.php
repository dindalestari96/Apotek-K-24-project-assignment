<?php
/* @var $this PendaftaranAnggotaController */
/* @var $model PendaftaranAnggota */

$this->breadcrumbs=array(
	'Pendaftaran Anggotas'=>array('index'),
	$model->id,
);

$this->menu=array(
	
	array('label'=>'Update PendaftaranAnggota', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PendaftaranAnggota', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View PendaftaranAnggota #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_member',
		'no_hp',
		'tanggal_lahir_member',
		'email_member',
		'jenis_kelamin',
		'no_KTP',
	),
)); ?>
