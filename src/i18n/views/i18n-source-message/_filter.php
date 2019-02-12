<?php
use lo\core\widgets\admin\ExtFilter;

/**
 * @var yii\web\View $this
 * @var \lo\modules\core\i18n\models\I18nSourceMessage $model
 */

echo ExtFilter::widget(["model" => $model]);