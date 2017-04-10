<?php

namespace CoavBundle\Entity;

/**
 * PlaneModel
 */
class PlaneModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cuiseSpeed;

    /**
     * @var int
     */
    private $nbSeat;

    /**
     * @var string
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cuiseSpeed
     *
     * @param integer $cuiseSpeed
     *
     * @return PlaneModel
     */
    public function setCuiseSpeed($cuiseSpeed)
    {
        $this->cuiseSpeed = $cuiseSpeed;

        return $this;
    }

    /**
     * Get cuiseSpeed
     *
     * @return int
     */
    public function getCuiseSpeed()
    {
        return $this->cuiseSpeed;
    }

    /**
     * Set nbSeat
     *
     * @param integer $nbSeat
     *
     * @return PlaneModel
     */
    public function setNbSeat($nbSeat)
    {
        $this->nbSeat = $nbSeat;

        return $this;
    }

    /**
     * Get nbSeat
     *
     * @return int
     */
    public function getNbSeat()
    {
        return $this->nbSeat;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PlaneModel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

