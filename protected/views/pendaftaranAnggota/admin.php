<?php
/* @var $this PendaftaranAnggotaController */
/* @var $model PendaftaranAnggota */

$this->breadcrumbs=array(
	'Pendaftaran Anggotas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PendaftaranAnggota', 'url'=>array('index')),
	array('label'=>'Create PendaftaranAnggota', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pendaftaran-anggota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pendaftaran Anggotas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pendaftaran-anggota-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama_member',
		'no_hp',
		'tanggal_lahir_member',
		'email_member',
		'jenis_kelamin',
		/*
		'no_KTP',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
