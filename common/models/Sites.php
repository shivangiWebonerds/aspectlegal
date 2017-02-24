<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sites".
 *
 * @property string $id
 * @property string $branding
 * @property string $logo_image
 * @property string $host
 * @property string $contact_number
 * @property string $contact_email
 * @property string $facebook_link
 * @property string $google_link
 * @property string $youtube_link
 * @property string $twitter_link
 * @property string $linkedin_link
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_by
 * @property string $updated_at
 * @property integer $is_deleted
 */
class Sites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['branding','host', 'contact_number', 'contact_email', 'facebook_link', 'google_link', 'youtube_link', 'twitter_link', 'linkedin_link'], 'required'],
            [['created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_at', 'updated_at', 'logo_image'], 'safe'],
            [['branding', 'logo_image', 'host', 'contact_number', 'contact_email', 'facebook_link', 'google_link', 'youtube_link', 'twitter_link', 'linkedin_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'branding' => 'Branding',
            'logo_image' => 'Logo Image',
            'host' => 'Host',
            'contact_number' => 'Contact Number',
            'contact_email' => 'Contact Email',
            'facebook_link' => 'Facebook Link',
            'google_link' => 'Google Link',
            'youtube_link' => 'Youtube Link',
            'twitter_link' => 'Twitter Link',
            'linkedin_link' => 'Linkedin Link',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
