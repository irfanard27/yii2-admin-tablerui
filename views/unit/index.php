<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Units';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-index">

    <div class="page-header d-print-none">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    <?= Html::encode($this->title) ?>
                </h2>
                <div class="text-muted mt-1">1-12 of 241 photos</div>
            </div>
            <!-- Page title actions -->
            <div class="col-12 col-md-auto ms-auto d-print-none">
                <div class="d-flex">
                    <?= Html::a('Create Unit', ['create'], ['class' => 'btn btn-primary']) ?>

                </div>
            </div>
        </div>
    </div>

        
            <div class="card mt-3">
            <div class="card-header">
                <h3 class="card-title">Units</h3>
            </div>
            <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'tableOptions' => [
            'class' => 'table table-vcenter card-table'
            ],
            'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        'id',
            'name',
            'symbol',
            [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, $model, $key, $index, $column) {
            return Url::toRoute([$action, 'id' => $model->id]);
            }
            ],
            ],
            ]); ?>
        </div>
    
    
</div>