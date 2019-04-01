<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\Notification as BaseNotification;

/**
 * Class Notification
 * @ORM\Entity(repositoryClass="Mgilet\NotificationBundle\Repository\NotificationRepository")
 *
 * @package App\Entity
 */
class Notification extends BaseNotification
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    protected $type;

    /**
     * @return int Notification Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get type
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**m
     * Set type
     *
     * @param null|string $type
     *
     * @return Notification
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}