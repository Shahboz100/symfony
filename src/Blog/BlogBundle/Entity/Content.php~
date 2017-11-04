<?php
/**
 * Created by PhpStorm.
 * User: shahb
 * Date: 30.10.2017
 * Time: 19:40
 */

namespace Blog\BlogBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;
/**
 * Class Content
 * @package Blog\BlogBundle\Entity
 * @ORM\Entity
 * @ORM\table(name="homepage")
 */
class Content
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
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
     * Set content
     *
     * @param string $content
     *
     * @return Content
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
