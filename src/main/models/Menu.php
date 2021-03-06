<?php

namespace lo\modules\core\main\models;

use lo\core\db\tree\TActiveRecord;
use Yii;

/**
 * This is the model class.
 *
 * @property integer $id
 * @property string link
 */
class Menu extends TActiveRecord
{
    const STATUS_DRAFT = 0;
    const STATUS_PUBLISHED = 1;

    const TARGET_SELF = "_self";
    const TARGET_BLANK = "_blank";

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%core__menu}}';
    }

    /**
     * @inheritdoc
     */
    public function metaClass()
    {
        return MenuMeta::class;
    }

    /**
     * Возвращает список значений для атрибута target
     * @return array
     */
    public static function targetsList()
    {
        return [
            self::TARGET_SELF => Yii::t('backend', 'Self window'),
            self::TARGET_BLANK => Yii::t('backend', 'Blank window')
        ];
    }

    /**
     * Определяет является ли пункт меню активным
     * @return bool
     */
    public function isAct()
    {
        if (empty($this->link))
            return false;

        $request = Yii::$app->request;

        // Главная
        if ($this->link == "/") {
            if (empty($request->pathinfo))
                return true;
        } else {
            $pathinfo = "/" . $request->pathinfo . "/";
            if (strpos($pathinfo, $this->link) === 0)
                return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(){
        return $this->link;
    }

}
