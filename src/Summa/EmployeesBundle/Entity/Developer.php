<?php

namespace Summa\EmployeesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use Summa\EmployeesBundle\Entity\Company;

/**
 * @ORM\Table("developers")
 * @ORM\Entity
 */
class Developer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $surname;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="integer")
     * @JMS\SerializedName("programmingLanguageId")
     * @JMS\Groups({"ids"})
     */
    private $programmingLanguageId;

    /**
     * @ORM\ManyToOne(targetEntity="ProgrammingLanguage")
     * @ORM\JoinColumn(name="programming_language_id", referencedColumnName="id")
     * @JMS\SerializedName("programmingLanguage")
     */
    private $programmingLanguage;

    /**
     * @ORM\Column(type="integer")
     * @JMS\SerializedName("companyId")
     * @JMS\Groups({"ids"})
     */
    private $companyId;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="developers")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    private $company;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active = true;

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
     * Set name
     *
     * @param string $name
     *
     * @return Developer
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Developer
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Developer
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set programmingLanguageId
     *
     * @param integer $programmingLanguageId
     *
     * @return Developer
     */
    public function setProgrammingLanguageId($programmingLanguageId)
    {
        $this->programmingLanguageId = $programmingLanguageId;

        return $this;
    }

    /**
     * Get programmingLanguageId
     *
     * @return integer
     */
    public function getProgrammingLanguageId()
    {
        return $this->programmingLanguageId;
    }

    /**
     * Set companyId
     *
     * @param integer $companyId
     *
     * @return Developer
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get companyId
     *
     * @return integer
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set programmingLanguage
     *
     * @param \Summa\EmployeesBundle\Entity\ProgrammingLanguage $programmingLanguage
     *
     * @return Developer
     */
    public function setProgrammingLanguage(\Summa\EmployeesBundle\Entity\ProgrammingLanguage $programmingLanguage = null)
    {
        $this->programmingLanguage = $programmingLanguage;

        return $this;
    }

    /**
     * Get programmingLanguage
     *
     * @return \Summa\EmployeesBundle\Entity\ProgrammingLanguage
     */
    public function getProgrammingLanguage()
    {
        return $this->programmingLanguage;
    }

    /**
     * Set company
     *
     * @param \Summa\EmployeesBundle\Entity\Company $company
     *
     * @return Developer
     */
    public function setCompany(\Summa\EmployeesBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Summa\EmployeesBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Developer
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
}
