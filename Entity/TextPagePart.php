<?php

namespace  Kunstmaan\PagePartBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\PagePartBundle\Form\TextPagePartAdminType;

/**
 * Class that defines a textpart object to add to a page
 *
 * @author Kristof Van Cauwenbergh
 *
 * @ORM\Entity
 * @ORM\Table(name="textpagepart")
 */
class TextPagePart{

    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $content;

    public function __construct()
    {
    }

    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id){
        $this->id = $id;
    }

    /**
     * Get pageId
     *
     * @return integer
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function __toString(){
        return "TextPagePart ".$this->getContent();
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

    public function getDefaultView(){
        return "KunstmaanPagePartBundle:TextPagePart:view.html.twig";
    }

    public function getDefaultAdminType(){
        return new TextPagePartAdminType();
    }
}