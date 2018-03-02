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
 * @property int $remind_time 提醒时间
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
            [['created_at', 'owner', 'remind_time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'owner' => 'Owner',
            'remind' => 'Remind',
            'remind_time' => 'Remind Time',
        ];
    }
}
