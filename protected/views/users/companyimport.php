<?php
/* @var $this CompanyImportFormController */
/* @var $model CompanyImportForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-import-form-companyimport-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
	'method'=>'post',
	// 'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="control-group">		
		<div class="span4">
            <div class="control-group <?php if ($model->hasErrors('postcode')) echo "error"; ?>">
				<?php echo $form->labelEx($model,'file'); ?>
				<?php echo $form->fileField($model,'file'); ?>
				<?php echo $form->error($model,'file'); ?>
            </div>
		</div>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton('Upload'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->