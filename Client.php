<?php

/**
 * @package Chocolife.me
 * @author Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */

/**
 * Class Client Клиент для работы с библиотекой для овощей
 */
class Client
{

    /** @var  Vegetable */
    private $vegetable;

    /**
     * Client constructor.
     * @param Vegetable $vegetable
     */
    function __construct(Vegetable $vegetable)
    {
        $this->vegetable = $vegetable;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        $this->vegetable->getOptions();
    }

    /**
     * @return String
     */
    public function getColor()
    {
        $this->vegetable->getColor();
    }

    /**
     * @param $color
     */
    public function setColor($color)
    {
        $this->vegetable->setColor($color);
    }

    /**
     * @return String
     */
    public function getPrice()
    {
        $this->vegetable->getPrice();
    }

    /**
     * @param $prise
     */
    public function setPrice($prise)
    {
        $this->vegetable->setPrice($prise);
    }

    /**
     * @return String
     */
    public function getSize()
    {
        $this->vegetable->getSize();
    }

    /**
     * @param $size
     */
    public function setSize($size)
    {
        $this->vegetable->setSize($size);
    }

    /**
     * @return array
     */
    public function get(){
       return $this->vegetable->get();
    }
}