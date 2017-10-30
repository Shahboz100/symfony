<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 30.10.2017
 * Time: 20:08
 */

namespace Blog\BlogBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * Class photos
 * @package Blog\BlogBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="photos")
 */
class photos
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="Blog\BlogBundle\Entity\Content")
     * @ORM\JoinColumn(name="content_id",referencedColumnName="id")
     */
    private $content;
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
     * Set link
     *
     * @param string $link
     *
     * @return photos
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set content
     *
     * @param integer $content
     *
     * @return photos
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return integer
     */
    public function getContent()
    {
        return $this->content;
    }
}
