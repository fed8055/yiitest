<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();?>

<?=$form->field($model,'name');?>

<?=$form->field($model, 'email');?>

<div class="form-group">
    <?=Html::submitButton('отправить')?>
</div>
<?php
    ActiveForm::end();
?>


