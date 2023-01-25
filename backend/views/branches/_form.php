<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Companies;

/** @var yii\web\View $this */
/** @var backend\models\Branches $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="branches-form">

    <?php $form = ActiveForm::begin([
        'id'=>$model->formName()]); ?>

    <?= $form->field($model, 'companies_company_id')->dropDownList(
            ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_name'),
            ['prompt'=>'Select Company']
    ) ?>

    <?= $form->field($model, 'branch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_address')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'branch_created_date')->textInput() ?> -->

    <!-- <?= $form->field($model, 'companies_company_id')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$script = <<< JS
$('form#{$model->formName()}').on('beforeSubmit',function(e){
    var \$form=$(this);
    $.post(
        \$form.attr('action'),
        \$form.serialize()
    ).done(function(result){
        //console.log(result);
        if(result==1){
            $(document).find('#modal').modal('hide');
            $(\$form).trigger("reset");
            $.pjax.reload({container:'#branchesGrid'});
        }else{
            $(\$form).trigger("reset");
            $("#message").html(result);
        }
    }).fail(function(){
        console.log("server error");    
    });
    return false;
});
JS;
$this->registerJs($script);
?>