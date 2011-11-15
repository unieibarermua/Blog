<?php

namespace Nireak\Bundle\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nireak\Bundle\BlogBundle\Entity\Noticia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Noticia
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
     * @var string $Izenburua
     *
     * @ORM\Column(name="Izenburua", type="string", length=255)
     */
    private $Izenburua;

    /**
     * @var text $Gorputza
     *
     * @ORM\Column(name="Gorputza", type="text")
     */
    private $Gorputza;

    /**
     * @var datetime $Argitaratze_data
     *
     * @ORM\Column(name="Argitaratze_data", type="datetime")
     */
    private $Argitaratze_data;


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
     * Set Izenburua
     *
     * @param string $izenburua
     */
    public function setIzenburua($izenburua)
    {
        $this->Izenburua = $izenburua;
    }

    /**
     * Get Izenburua
     *
     * @return string 
     */
    public function getIzenburua()
    {
        return $this->Izenburua;
    }

    /**
     * Set Gorputza
     *
     * @param text $gorputza
     */
    public function setGorputza($gorputza)
    {
        $this->Gorputza = $gorputza;
    }

    /**
     * Get Gorputza
     *
     * @return text 
     */
    public function getGorputza()
    {
        return $this->Gorputza;
    }

    /**
     * Set Argitaratze_data
     *
     * @param datetime $argitaratzeData
     */
    public function setArgitaratzeData($argitaratzeData)
    {
        $this->Argitaratze_data = $argitaratzeData;
    }

    /**
     * Get Argitaratze_data
     *
     * @return datetime 
     */
    public function getArgitaratzeData()
    {
        return $this->Argitaratze_data;
    }
}