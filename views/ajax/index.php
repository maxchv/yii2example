<?php
use yii\helpers\Html;
use yii\widgets\Pjax;

$this->registerJsFile("@web/js/script.js",
    ['depends' => [\yii\web\JqueryAsset::className()]]);
$this->title = "Hello Ajax";
$this->params['breadcrumbs'][] = "Ajax";
?>

<div class="site-ajax">
    <h1><?= \yii\helpers\Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?php
            Pjax::begin(['enablePushState' => false, 'timeout' => 5000]);

            echo Html::beginForm(['ajax/form-submission'], "post", ['data-pjax' => '', 'class' => 'form-group']);
            echo Html::dropDownList("languages", '', ["C", "C++"], ['class' => 'form-control']);
            echo Html::submitButton("Send", ['class' => 'btn btn-default']);
            echo Html::endForm();
            echo "<h3>$data</h3>";
            Pjax::end();
            ?>
        </div>
    </div>
    <div class="row">
        <?php Pjax::begin(['enablePushState' => false, 'timeout' => 1000]); ?>
        <?= Html::a("Обновить", ['ajax/time'], ['class' => 'btn btn-lg btn-primary', 'id' => 'clock']) ?>
        <h1>Сейчас: <?= $time->format("H:i:s") ?></h1>
        <?php Pjax::end();
        ?>
    </div>
    <img src="/gd.php" alt=""/>
    <div class="row">
        <div class="col-lg-5">
            <div class="form-group">
                <?= Html::label("City", 'city', ['class' => 'control-label']) ?>
                <?= Html::input("text", "city", '', ['class' => 'form-control', 'id' => 'city', 'list'=>'cities']) ?>
                <datalist id="cities"></datalist>
            </div>
        </div>
    </div>
</div>



