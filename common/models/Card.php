<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_card".
 *
 * @property int $id
 * @property string $name
 * @property string $birthday 生日
 * @property string $phone
 * @property string $owner
 * @property string $remark
 * @property string $sex
 * @property string $profession
 * @property string $created_at
 */
class Card extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_card';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['birthday', 'phone', 'owner', 'created_at'], 'integer'],
            [['remark', 'sex'], 'string'],
            [['name', 'profession'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'phone' => 'Phone',
            'owner' => 'Owner',
            'remark' => 'Remark',
            'sex' => 'Sex',
            'profession' => 'Profession',
            'created_at' => 'Created At',
        ];
    }
}
