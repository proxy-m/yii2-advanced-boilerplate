<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Mark Tan <mtcy_9012@hotmail.com>
 */
class Post extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
      return [
          // [['name', 'description', 'added_datetime'], 'required'],
          [['category_id', 'int']],
          [['added_datetime'], 'safe'],
          [['title', 'description', 'image'], 'string', 'max' => 255],
      ];
    }
}
?>
