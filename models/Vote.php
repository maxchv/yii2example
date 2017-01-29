<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vote".
 *
 * @property integer $id
 * @property string $lang
 * @property integer $votes
 */
class Vote extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vote';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lang'], 'required'],
            [['votes'], 'integer'],
            [['lang'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang' => 'Lang',
            'votes' => 'Votes',
        ];
    }
}
