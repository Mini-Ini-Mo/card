<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Card */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthday')->textInput(['maxlength' => true])->widget(\kartik\date\DatePicker::className(),[
            'value'=>0,
            'pluginOptions'=>[
                'autoclose'=>true,
                'format' => 'yyyy/mm/dd'
            ]
    ]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->hiddenInput(['maxlength' => true,'value'=>Yii::$app->user->id])->label(false) ?>

    <?= $form->field($model, 'sex')->dropDownList([ 'man' => '男', 'woman' => '女', ], ['prompt' => '请选择']) ?>

    <?= $form->field($model, 'profession')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->hiddenInput(['maxlength' => true,'valute'=>time()])->label(false) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord?'保存':'修改', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
