<?php

namespace Aizatto\Bundle\TwitterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aizatto\Bundle\TwitterBundle\Entity\Status
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Aizatto\Bundle\TwitterBundle\Entity\StatusRepository")
 */
class Status
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bigint $status_id
     *
     * @ORM\Column(name="status_id", type="bigint")
     */
    private $status_id;

    /**
     * @var integer $retweet_count
     *
     * @ORM\Column(name="retweet_count", type="integer")
     */
    private $retweet_count;

    /**
     * @var string $in_reply_to_screen_name
     *
     * @ORM\Column(name="in_reply_to_screen_name", type="string", length=255)
     */
    private $in_reply_to_screen_name;

    /**
     * @var bigint $in_reply_to_status_id
     *
     * @ORM\Column(name="in_reply_to_status_id", type="bigint")
     */
    private $in_reply_to_status_id;

    /**
     * @var integer $in_reply_to_user_id
     *
     * @ORM\Column(name="in_reply_to_user_id", type="integer")
     */
    private $in_reply_to_user_id;

    /**
     * @var string $text
     *
     * @ORM\Column(name="text", type="string", length=140)
     */
    private $text;


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
     * Set status_id
     *
     * @param bigint $statusId
     */
    public function setStatusId($statusId)
    {
        $this->status_id = $statusId;
    }

    /**
     * Get status_id
     *
     * @return bigint 
     */
    public function getStatusId()
    {
        return $this->status_id;
    }

    /**
     * Set retweet_count
     *
     * @param integer $retweetCount
     */
    public function setRetweetCount($retweetCount)
    {
        $this->retweet_count = $retweetCount;
    }

    /**
     * Get retweet_count
     *
     * @return integer 
     */
    public function getRetweetCount()
    {
        return $this->retweet_count;
    }

    /**
     * Set in_reply_to_screen_name
     *
     * @param string $inReplyToScreenName
     */
    public function setInReplyToScreenName($inReplyToScreenName)
    {
        $this->in_reply_to_screen_name = $inReplyToScreenName;
    }

    /**
     * Get in_reply_to_screen_name
     *
     * @return string 
     */
    public function getInReplyToScreenName()
    {
        return $this->in_reply_to_screen_name;
    }

    /**
     * Set in_reply_to_status_id
     *
     * @param bigint $inReplyToStatusId
     */
    public function setInReplyToStatusId($inReplyToStatusId)
    {
        $this->in_reply_to_status_id = $inReplyToStatusId;
    }

    /**
     * Get in_reply_to_status_id
     *
     * @return bigint 
     */
    public function getInReplyToStatusId()
    {
        return $this->in_reply_to_status_id;
    }

    /**
     * Set in_reply_to_user_id
     *
     * @param integer $inReplyToUserId
     */
    public function setInReplyToUserId($inReplyToUserId)
    {
        $this->in_reply_to_user_id = $inReplyToUserId;
    }

    /**
     * Get in_reply_to_user_id
     *
     * @return integer 
     */
    public function getInReplyToUserId()
    {
        return $this->in_reply_to_user_id;
    }

    /**
     * Set text
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }
}