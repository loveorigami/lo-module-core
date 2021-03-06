<?php
/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var \lo\modules\core\main\models\IncludeItem $searchModel
 */

use lo\core\widgets\admin\Grid;
use lo\core\widgets\admin\CrudLinks;

$this->title = Yii::t('backend', 'Include Item');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">
    <?php
    echo $this->render('/_menu');
    echo CrudLinks::widget(["action" => CrudLinks::CRUD_LIST, "model" => $searchModel]);
    echo $this->render('_filter', ['model' => $searchModel]);

    echo Grid::widget([
        'dataProvider' => $dataProvider,
        'model' => $searchModel,
    ]);
    ?>

</div>
