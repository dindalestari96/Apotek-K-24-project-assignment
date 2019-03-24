<?php
/* @var $this PendaftaranAnggotaController */
/* @var $model PendaftaranAnggota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pendaftaran-anggota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nama_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp',array('size'=>13,'maxlength'=>13)); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir_member'); ?>
		<?php echo $form->textField($model,'tanggal_lahir_member',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'tanggal_lahir_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'email_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_KTP'); ?>
		<?php echo $form->textField($model,'no_KTP',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'no_KTP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->