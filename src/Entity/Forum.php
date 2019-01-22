<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumRepository")
 */
class Forum
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $sf_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $msg_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSfId(): ?int
    {
        return $this->sf_id;
    }

    public function setSfId(int $sf_id): self
    {
        $this->sf_id = $sf_id;

        return $this;
    }

    public function getMsgId(): ?int
    {
        return $this->msg_id;
    }

    public function setMsgId(int $msg_id): self
    {
        $this->msg_id = $msg_id;

        return $this;
    }
}
