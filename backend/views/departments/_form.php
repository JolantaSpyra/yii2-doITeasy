<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Companies;
use backend\models\Branches;

/** @var yii\web\View $this */
/** @var backend\models\Departments $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="departments-form">

<?php $form = ActiveForm::begin(); ?>
    
    
    <!-- <?= $form->field($model, 'companies_company_id')->textInput() ?>-->
    <?= $form->field($model,'companies_company_id')->dropDownList(
        ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_name'),
        [
            'prompt'=>'Please choose company',
            'onchange'=>'
                $.post("index.php?r=branches/lists&id='.'"+$(this).val(),function(data){
                    $("select#departments-branches_branch_id").html(data);
                });'
        ]
        
     ); ?>
    
    
    <!-- <?= $form->field($model, 'branches_branch_id')->textInput() ?>-->
    <?= $form->field($model,'branches_branch_id')->dropDownList(
        ArrayHelper::map(Branches::find()->all(), 'branch_id', 'branch_name'),
        ['prompt'=>'Please choose branch']
     ); ?>
     

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'department_created_date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
