<?php

/**
 * Created by PhpStorm.
 * User: serg
 * Date: 24.11.16
 * Time: 20:09
 */
class Vegetable
{

    /**
     * @var Integer
     */
    protected $price;

    /**
     * @var String
     */
    protected $color;

    /**
     * @var Integer
     */
    protected $size;

    public function __construct(array $vegetable)
    {
        $this->setColor($vegetable['color']);
        $this->setPrice($vegetable['price']);
        $this->setSize($vegetable['size']);
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return Vegetable
     */
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return String
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param String $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return ['color', 'price', 'size'];
    }

    /**
     * @return array
     */
    public function get()
    {
        return [
            'color' => $this->getColor(),
            'price' => $this->getSize(),
            'size' => $this->getSize()
        ];
    }
}
