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
            [['owner', 'created_at'], 'integer'],
            [['remark', 'sex'], 'string'],
            [['name', 'profession'], 'string', 'max' => 150],
            [['birthday'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '姓名',
            'birthday' => '生日',
            'phone' => '电话',
            'owner' => '所属者',
            'remark' => '备注',
            'sex' => '性别',
            'profession' => '职业',
            'created_at' => '创建时间',
        ];
    }
}
