<?php

use backend\models\Event;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\EventSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= yii2fullcalendar\yii2fullcalendar::widget([
      'options' => [
        // 'lang' => 'zh-cn',
          
        //... more options to be defined here!
      ]
    // 'events'=> $events,
      //'ajaxEvents' => Url::to(['/timetrack/default/jsoncalendar'])
    ]);
?>




</div>
