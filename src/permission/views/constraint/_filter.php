<?php
use lo\core\widgets\admin\ExtFilter;

/**
 * @var yii\web\View $this
 * @var \lo\modules\core\permission\models\Constraint $model
 */

echo ExtFilter::widget(["model" => $model]);