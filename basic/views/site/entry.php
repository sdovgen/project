<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')?>
	<?= $form->field($model, 'email') ?>

<div class="form-group">
	<?= Html::submitButton('Send', ['class' => 'btn-primary bts-success']) ?>
</div> 

<?php $form = ActiveForm::end(); ?>
