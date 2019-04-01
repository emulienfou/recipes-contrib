<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\Notifiable as BaseNotifiable;

/**
 * Class Notifiable
 * @ORM\Entity(repositoryClass="Mgilet\NotificationBundle\Repository\NotifiableRepository")
 *
 * @package App\Entity
 */
class Notifiable extends BaseNotifiable
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @return int Notification Id
     */
    public function getId()
    {
        return $this->id;
    }
}