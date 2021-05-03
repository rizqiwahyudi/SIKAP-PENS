<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "list_kp".
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $description
 * @property string $contact
 */
class ListKp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'list_kp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'address', 'description', 'contact'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['address', 'description', 'contact'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Tempat KP',
            'address' => 'Alamat Tempat KP',
            'description' => 'Deskripsi Tempat KP',
            'contact' => 'Contact Tempat KP',
        ];
    }
}
