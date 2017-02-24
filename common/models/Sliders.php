<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sliders".
 *
 * @property string $id
 * @property string $image_file
 * @property string $heading
 * @property string $caption
 * @property integer $status
 */
class Sliders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sliders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['heading', 'caption', 'status','name','site_id'], 'required'],
            [['caption','image_file'], 'string'],
            [['status','site_id'], 'integer'],
            [['image_file', 'heading','name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_id'=>'Site ID',
            'image_file' => 'Image File',
            'heading' => 'Heading',
            'caption' => 'Caption',
            'status' => 'Status',
            'name'=>'Name',
        ];
    }
}
