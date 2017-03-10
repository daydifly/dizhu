<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;//Url::to(['sit/say'])])
?>
<?php $form = ActiveForm::begin(['action' => ['entry/data']]); ?>

<?= $form->field($model, 'name')->label('asdasd')->textarea() ?>

<?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>