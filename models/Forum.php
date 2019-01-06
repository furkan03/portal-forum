<?php

namespace kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "Kullanicilar".
 *
 * @property int $id
 * @property string $Kullanici_Adi
 * @property string $Sifre
 * @property string $Sorular
 * @property string $Cevaplar
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Kullanicilar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kullanici_Adi', 'Sifre', 'Sorular', 'Cevaplar'], 'required'],
            [['Kullanici_Adi', 'Sifre', 'Sorular', 'Cevaplar'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Kullanici_Adi' => 'Kullanici  Adi',
            'Sifre' => 'Sifre',
            'Sorular' => 'Sorular',
            'Cevaplar' => 'Cevaplar',
        ];
    }
}
