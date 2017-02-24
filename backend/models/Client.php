<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property string $id
 * @property string $name
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
            [['name', 'designation', 'about_me', 'target_link', 'fb_link', 'twitter_link', 'linkdin_link', 'created_at', 'created_by', 'updated_by', 'is_deleted'], 'required'],
            [['about_me'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['name', 'designation', 'target_link', 'fb_link', 'twitter_link', 'linkdin_link'], 'string', 'max' => 255],
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
