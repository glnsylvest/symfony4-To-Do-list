<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(name="body", type="text", nullable=true)
     */ 
    private $body;

    /**
     * @ORM\Column(name="task_status", type="boolean", nullable=true)
     */ 
    private $task_status;



    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title=$title;
    }

    public function getBody()
    {
        return $this->body;
    }
    
    public function setBody($body)
    {
        $this->body=$body;
    }

    public function getTask_status()
    {
        return $this->task_status;
    }

    public function setTask_status($task_status)
    {
        $this->task_status=$task_status;
    }

    
}
