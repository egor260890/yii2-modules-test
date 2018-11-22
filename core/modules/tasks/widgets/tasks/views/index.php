<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.11.2018
 * Time: 21:25
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>


<?php $form = ActiveForm::begin(['id' => 'tasks-form','action' => $route]); ?>

<?= $form->field($model, 'title')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'content')->textarea() ?>

<div class="form-group">
    <?= Html::submitButton('send', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
