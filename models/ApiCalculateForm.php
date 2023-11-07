<?php

namespace app\models;

use yii\base\Model;
use yii\web\NotFoundHttpException;

class ApiCalculateForm extends Model
{
    public int|null $tonnage = null;
    public string|null $month = null;
    public string|null $raw_types = null;

    public function rules()
    {
        return [
            [['tonnage', 'month', 'raw_types'], 'required'],
            [['raw_types', 'month'], 'string'],
            [['tonnage'], 'integer'],
        ];
    }

    private function getMonthId(): int
    {
        $month = Month::findOne(['month' => $this->month]);

        if (empty($month) === true) {
            throw new NotFoundHttpException("Месяц $this->month не найден в базе");
        }

        return $month->id;
    }

    private function getTonnageId(): int
    {
        $tonnage = Tonnage::findOne(['tonnage' => $this->tonnage]);

        if (empty($tonnage) === true) {
            throw new NotFoundHttpException("Тоннаж $this->tonnage не найден в базе");
        }

        return $tonnage->id;
    }

    private function getRawId(): int
    {
        $raw_types = Raw_types::findOne(['raw_types' => $this->raw_types]);

        if (empty($raw_types) === true) {
            throw new NotFoundHttpException("Тип сырья $this->raw_types не найден в базе");
        }

        return $raw_types->id;
    }

    public function calculatePrice(): int
    {
        $montId = $this->getMonthId();
        $tonnageId = $this->getTonnageId();
        $rawId = $this->getRawId();

        $prices = Prices::find()
            ->andWhere(['=', 'month_id', $montId])
            ->andWhere(['=', 'tonnage_id', $tonnageId])
            ->andWhere(['=', 'raw_types_id', $rawId])
            ->one()
        ;

        if (empty($prices) === true) {
            throw new NotFoundHttpException("Цена для значений $this->month $this->tonnage $this->raw_tupes не найдена в базе");
        }

        return $prices->prices;
    }

    public function generatePriceList(): array
    {
        $result = [];
        $prices = Prices::find()->where(['raw_types_id' => $this->getRawId()])->all();

        foreach ($prices as $prices) {
            $result[$this->getMonthNameById($prices->month_id)][$this->getTonnageValueById($prices->tonnage_id)] = $prices->prices;
        }

        return $result;
    }

    private function getMonthNameById(int $id): string
    {
        $month = Month::findOne(['id' => $id]);

        if (empty($month) === true) {
            throw new NotFoundHttpException("Месяц с id $id не найден в базе");
        }

        return $month->month;
    }

    private function getTonnageValueById(int $id): int
    {
        $tonnage = Tonnage::findOne(['id' => $id]);

        if (empty($tonnage) === true) {
            throw new NotFoundHttpException("Тоннаж с id $id не найден в базе");
        }

        return $tonnage->tonnage;
    }
}