<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression;
use biz\master\components\Helper as MasterHelper;

/* @var $this yii\web\View */
/* @var $model biz\sales\models\Sales */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="sales-form">
    <?php
    $form = ActiveForm::begin([
            'id' => 'sales-form',
    ]);
    ?>
    <?php
    $models = $model->salesDtls;
    $models[] = $model;
    echo $form->errorSummary($models);
    ?>
    <?= $this->render('_detail', ['model' => $model, 'price' => $price]) ?>
    <div class="col-lg-3" style="padding-right: 0px;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Sales Header
            </div>
            <div class="panel-body">
                <?= $form->field($model, 'sales_num')->textInput(['readonly' => true]); ?>
                <?= Html::activeHiddenInput($model, 'id_warehouse', ['value'=>'1']) ?>
                <?=
                    $form->field($model, 'salesDate')
                    ->widget('yii\jui\DatePicker', [
                        'options' => ['class' => 'form-control', 'style' => 'width:50%'],
                        'clientOptions' => [
                            'dateFormat' => 'dd-mm-yy'
                        ],
                ]);
                ?>
                <hr >
                <?= Html::activeHiddenInput($model, 'id_customer', ['value'=>'1']);?>
                <?= $form->field($model, 'dokter')->widget('yii\jui\AutoComplete',[
                    'options'=>['class'=>'form-control'],
                    'clientOptions'=>[
                        'source'=>  ext\sales\models\ExtSales::find()->select('dokter')->distinct()->column()
                    ]
                ]) ?>
                <?= $form->field($model, 'resep')->textInput() ?>
                <?= $form->field($model, 'discount')->textInput() ?>
            </div>
        </div>
        <div class="form-group">
            <?php
            echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
            ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
