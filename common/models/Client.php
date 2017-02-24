<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property string $id
 * @property string $name
 * @property string $image_file
 * @property string $designation
 * @property string $about_me
 * @property string $target_link
 * @property string $fb_link
 * @property string $twitter_link
 * @property string $linkdin_link
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'designation','site_id', 'about_me', 'target_link', 'fb_link', 'twitter_link', 'linkdin_link' ], 'required'],
            [['about_me'], 'string'],
            [['created_at', 'updated_at','image_file'], 'safe'],
            [['created_by', 'updated_by', 'is_deleted','site_id'], 'integer'],
            [['name', 'image_file', 'designation', 'target_link', 'fb_link', 'twitter_link', 'linkdin_link'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'image_file' => 'Image File',
            'designation' => 'Designation',
            'about_me' => 'About Me',
            'target_link' => 'Target Link',
            'fb_link' => 'Fb Link',
            'twitter_link' => 'Twitter Link',
            'linkdin_link' => 'Linkdin Link',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
