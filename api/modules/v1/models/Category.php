<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;
/**
 * Country Model
 *
 * @author Mark Tan <mtcy_9012@hotmail.com>
 */
class Category extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
      return [
          // [['name', 'description', 'added_datetime'], 'required'],
          [['added_datetime'], 'safe'],
          [['name', 'description'], 'string', 'max' => 255],
      ];
    }
}
?>
