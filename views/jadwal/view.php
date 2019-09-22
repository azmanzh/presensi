<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */

$this->title = $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jadwal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jadwal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jadwal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'jam',
            [
                'attribute'=>'id_matakuliah',
                'value'=>function($data){
                    return $data->getIdMatkul();
                }
            ],
            [
                'attribute'=>'id_kelas',
                'value'=>function($data){
                    return $data->getIdKelas();
                }
            ],
            [
                'attribute'=>'id_ruangan',
                'value'=>function($data){
                    return $data->getIdRuangan();
                }
            ],
            //'status',
            //'id_dosen',
        ],
    ]) ?>

</div>
