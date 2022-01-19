<?php

class OmnivaIntCarrierCountry extends ObjectModel
{
    public $id;

    public $id_carrier;

    public $id_country;

    public $price_type;

    public $price;

    public $free_shipping;

    public $active;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'omniva_int_carrier_country',
        'primary' => 'id',
        'fields' => [
            'id_carrier' =>       ['type' => self::TYPE_INT, 'required' => true, 'size' => 10],
            'id_country' =>       ['type' => self::TYPE_INT, 'required' => true, 'size' => 10],
            'price_type' =>       ['type' => self::TYPE_STRING, 'required' => true, 'size' => 30],
            'price' =>            ['type' => self::TYPE_FLOAT, 'required' => true, 'size' => 10, 'validate' => 'isPrice'],
            'free_shipping' =>    ['type' => self::TYPE_FLOAT, 'required' => true, 'size' => 10, 'validate' => 'isPrice'],
            'active' =>           ['type' => self::TYPE_BOOL, 'required' => true, 'validate' => 'isBool'],
        ],
    ];
}
