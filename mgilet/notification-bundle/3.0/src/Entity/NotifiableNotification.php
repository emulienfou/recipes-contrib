<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Mgilet\NotificationBundle\Model\NotifiableNotification as BaseNotifiableNotification;

/**
 * Class NotifiableNotification
 * @ORM\Entity(repositoryClass="Mgilet\NotificationBundle\Repository\NotifiableNotificationRepository")
 *
 * @package App\Entity
 */
class NotifiableNotification extends BaseNotifiableNotification
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