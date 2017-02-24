<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $image_file
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Blogs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content','site_id'], 'required'],
            [['content'], 'string'],
            [['created_by', 'updated_by', 'is_deleted','site_id'], 'integer'],
            [['created_at', 'updated_at','image_file'], 'safe'],
            [['title', 'image_file'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'content' => 'Content',
            'image_file' => 'Image File',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
