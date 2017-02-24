<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property string $id
 * @property string $name
 * @property string $image_file
 * @property string $designation
 * @property string $about_me
 * @property string $fb_link
 * @property string $twitter_link
 * @property string $linkdin_link
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'designation', 'about_me','site_id', 'fb_link', 'twitter_link', 'linkdin_link'], 'required'],
            [['about_me'], 'string'],
            [['created_at', 'updated_at', 'image_file'], 'safe'],
            [['created_by', 'updated_by', 'is_deleted','site_id'], 'integer'],
            [['name', 'image_file', 'designation', 'fb_link', 'twitter_link', 'linkdin_link'], 'string', 'max' => 255],
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
            'site_id'=>'Site ID',
            'image_file' => 'Image File',
            'designation' => 'Designation',
            'about_me' => 'About Me',
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
