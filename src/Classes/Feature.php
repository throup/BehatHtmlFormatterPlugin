<?php
/**
 * Created by PhpStorm.
 * User: nealv
 * Date: 05/01/15
 * Time: 14:39
 */

namespace emuse\BehatHTMLFormatter\Classes;


class Feature
{
    private $name;
    private $description;
    private $tags;
    private $file;

    /**
     * @var Scenario[]
     */
    private $scenarios;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return Scenario[]
     */
    public function getScenarios()
    {
        return $this->scenarios;
    }

    /**
     * @param Scenario[] $scenarios
     */
    public function setScenarios($scenarios)
    {
        $this->scenarios = $scenarios;
    }

    public function addScenario($scenario)
    {
        $this->scenarios[] = $scenario;
    }
}
