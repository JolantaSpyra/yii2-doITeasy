<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Locations;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var backend\models\Customers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'zip_code')->textInput(['maxlength' => true]) ?> -->
    <?=
        $form->field($model, 'zip_code')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Locations::find()->all(), 'location_id', 'zip_code'),
            'language' => 'en',
            'options' => ['placeholder' => 'Select a Zip Code','id'=>'zipCode'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<!-- <?php 
$script=<<< JS

$("#zipCode").change(function(){
    var zipId=$(this).val();
    $.get('index.php?r=locations/get-city-province',{zipId:zipId},function(data){
        data=$.parseJSON(data);
        $("#customers-city").val(data.city);
        $("#customers-province").val(data.province);
    })
});
JS;
$this->registerJs($script);

?> -->