<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_note".
 *
 * @property int $id
 * @property string $content
 * @property string $status 'over'=>已结束,'underway'=>进行中
 * @property int $created_at
 * @property int $owner
 * @property string $remind 是否提醒
 * @property string $remind_time 提醒时间
 */
class Note extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_note';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content', 'status', 'remind'], 'string'],
            [['created_at', 'owner'], 'integer'],
            [['remind_time'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => '内容',
            'status' => '状态',
            'created_at' => '创建时间',
            'owner' => '所属者',
            'remind' => '提醒',
            'remind_time' => '提醒时间',
        ];
    }
}
