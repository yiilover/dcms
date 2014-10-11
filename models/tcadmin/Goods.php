<?php

namespace app\models\tcadmin;

use Yii;

/**
 * This is the model class for table "tc_goods".
 *
 * @property string $goods_id
 * @property integer $cat_id
 * @property string $goods_sn
 * @property string $goods_name
 * @property string $goods_name_style
 * @property string $click_count
 * @property integer $brand_id
 * @property string $provider_name
 * @property integer $goods_number
 * @property string $goods_weight
 * @property string $market_price
 * @property string $shop_price
 * @property string $promote_price
 * @property string $promote_start_date
 * @property string $promote_end_date
 * @property integer $warn_number
 * @property string $keywords
 * @property string $goods_brief
 * @property string $goods_desc
 * @property string $goods_thumb
 * @property string $goods_img
 * @property string $original_img
 * @property integer $is_real
 * @property string $extension_code
 * @property integer $is_on_sale
 * @property integer $is_alone_sale
 * @property integer $is_shipping
 * @property string $integral
 * @property string $add_time
 * @property integer $sort_order
 * @property integer $is_delete
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $is_promote
 * @property integer $bonus_type_id
 * @property string $last_update
 * @property integer $goods_type
 * @property string $seller_note
 * @property integer $give_integral
 * @property integer $rank_integral
 * @property integer $suppliers_id
 * @property integer $is_check
 * @property string $huacai
 * @property string $baozhuang
 * @property string $changhe
 * @property string $huayu
 * @property integer $f1
 * @property integer $f2
 * @property integer $f3
 * @property integer $f4
 * @property integer $f5
 * @property integer $f6
 * @property integer $f7
 * @property integer $f8
 * @property integer $f9
 * @property integer $f10
 * @property integer $f11
 */
class Goods extends \yii\db\ActiveRecord2
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tc_goods';
    }



    public function getDbConnection() {

        return Yii::app()->tcdb;
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id', 'click_count', 'brand_id', 'goods_number', 'promote_start_date', 'promote_end_date', 'warn_number', 'is_real', 'is_on_sale', 'is_alone_sale', 'is_shipping', 'integral', 'add_time', 'sort_order', 'is_delete', 'is_best', 'is_new', 'is_hot', 'is_promote', 'bonus_type_id', 'last_update', 'goods_type', 'give_integral', 'rank_integral', 'suppliers_id', 'is_check', 'f1', 'f2', 'f3', 'f4', 'f5', 'f6', 'f7', 'f8', 'f9', 'f10', 'f11'], 'integer'],
            [['goods_weight', 'market_price', 'shop_price', 'promote_price'], 'number'],
            [['goods_desc'], 'required'],
            [['goods_desc'], 'string'],
            [['goods_sn', 'goods_name_style'], 'string', 'max' => 60],
            [['goods_name'], 'string', 'max' => 120],
            [['provider_name', 'huacai', 'baozhuang', 'changhe'], 'string', 'max' => 100],
            [['keywords', 'goods_brief', 'goods_thumb', 'goods_img', 'original_img', 'seller_note', 'huayu'], 'string', 'max' => 255],
            [['extension_code'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => Yii::t('app', 'Goods ID'),
            'cat_id' => Yii::t('app', 'Cat ID'),
            'goods_sn' => Yii::t('app', 'Goods Sn'),
            'goods_name' => Yii::t('app', 'Goods Name'),
            'goods_name_style' => Yii::t('app', 'Goods Name Style'),
            'click_count' => Yii::t('app', 'Click Count'),
            'brand_id' => Yii::t('app', 'Brand ID'),
            'provider_name' => Yii::t('app', 'Provider Name'),
            'goods_number' => Yii::t('app', 'Goods Number'),
            'goods_weight' => Yii::t('app', 'Goods Weight'),
            'market_price' => Yii::t('app', 'Market Price'),
            'shop_price' => Yii::t('app', 'Shop Price'),
            'promote_price' => Yii::t('app', 'Promote Price'),
            'promote_start_date' => Yii::t('app', 'Promote Start Date'),
            'promote_end_date' => Yii::t('app', 'Promote End Date'),
            'warn_number' => Yii::t('app', 'Warn Number'),
            'keywords' => Yii::t('app', 'Keywords'),
            'goods_brief' => Yii::t('app', 'Goods Brief'),
            'goods_desc' => Yii::t('app', 'Goods Desc'),
            'goods_thumb' => Yii::t('app', 'Goods Thumb'),
            'goods_img' => Yii::t('app', 'Goods Img'),
            'original_img' => Yii::t('app', 'Original Img'),
            'is_real' => Yii::t('app', 'Is Real'),
            'extension_code' => Yii::t('app', 'Extension Code'),
            'is_on_sale' => Yii::t('app', 'Is On Sale'),
            'is_alone_sale' => Yii::t('app', 'Is Alone Sale'),
            'is_shipping' => Yii::t('app', 'Is Shipping'),
            'integral' => Yii::t('app', 'Integral'),
            'add_time' => Yii::t('app', 'Add Time'),
            'sort_order' => Yii::t('app', 'Sort Order'),
            'is_delete' => Yii::t('app', 'Is Delete'),
            'is_best' => Yii::t('app', 'Is Best'),
            'is_new' => Yii::t('app', 'Is New'),
            'is_hot' => Yii::t('app', 'Is Hot'),
            'is_promote' => Yii::t('app', 'Is Promote'),
            'bonus_type_id' => Yii::t('app', 'Bonus Type ID'),
            'last_update' => Yii::t('app', 'Last Update'),
            'goods_type' => Yii::t('app', 'Goods Type'),
            'seller_note' => Yii::t('app', 'Seller Note'),
            'give_integral' => Yii::t('app', 'Give Integral'),
            'rank_integral' => Yii::t('app', 'Rank Integral'),
            'suppliers_id' => Yii::t('app', 'Suppliers ID'),
            'is_check' => Yii::t('app', 'Is Check'),
            'huacai' => Yii::t('app', 'Huacai'),
            'baozhuang' => Yii::t('app', 'Baozhuang'),
            'changhe' => Yii::t('app', 'Changhe'),
            'huayu' => Yii::t('app', 'Huayu'),
            'f1' => Yii::t('app', 'F1'),
            'f2' => Yii::t('app', 'F2'),
            'f3' => Yii::t('app', 'F3'),
            'f4' => Yii::t('app', 'F4'),
            'f5' => Yii::t('app', 'F5'),
            'f6' => Yii::t('app', 'F6'),
            'f7' => Yii::t('app', 'F7'),
            'f8' => Yii::t('app', 'F8'),
            'f9' => Yii::t('app', 'F9'),
            'f10' => Yii::t('app', 'F10'),
            'f11' => Yii::t('app', 'F11'),
        ];
    }
}
