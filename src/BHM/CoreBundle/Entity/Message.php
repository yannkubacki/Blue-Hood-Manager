<?php

namespace BHM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="BHM\CoreBundle\Entity\MessageRepository")
 */
class Message
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @ORM\ManyToOne(targetEntity="BHM\CoreBundle\Entity\Discussion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $discussionId;

    /**
     * @ORM\ManyToOne(targetEntity="BHM\CoreBundle\Entity\Message")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reponseId;

    /**
     * @ORM\ManyToOne(targetEntity="BHM\CoreBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set discussionId
     *
     * @param integer $discussionId
     * @return Message
     */
    public function setDiscussionId($discussionId)
    {
        $this->discussionId = $discussionId;

        return $this;
    }

    /**
     * Get discussionId
     *
     * @return integer 
     */
    public function getDiscussionId()
    {
        return $this->discussionId;
    }

    /**
     * Set reponseId
     *
     * @param integer $reponseId
     * @return Message
     */
    public function setReponseId($reponseId)
    {
        $this->reponseId = $reponseId;

        return $this;
    }

    /**
     * Get reponseId
     *
     * @return integer 
     */
    public function getReponseId()
    {
        return $this->reponseId;
    }

    /**
     * Set userId
     *
     * @param \BHM\CoreBundle\Entity\User $userId
     * @return Message
     */
    public function setUserId(\BHM\CoreBundle\Entity\User $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \BHM\CoreBundle\Entity\User 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
