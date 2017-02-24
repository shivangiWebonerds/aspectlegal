<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property string $id
 * @property string $image_file
 * @property string $content
 * @property string $author
 * @property integer $status
 * @property string $created_by
 * @property string $updated_by
 * @property string $created_on
 * @property string $updated_on
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'author','designation','organisation','site_id'], 'required'],
            [['content','designation','organisation'], 'string'],
            [['status', 'created_by', 'updated_by','site_id'], 'integer'],
            [['created_on', 'image_file','updated_on'], 'safe'],
            [['image_file', 'author'], 'string', 'max' => 255],
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
            'content' => 'Content',
            'author' => 'Author',
            'designation'=>'Designation',
            'organisation'=>'Organisation',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_on' => 'Created On',
            'updated_on' => 'Updated On',
        ];
    }
}
