<?php

class Actor
{
    private string $firstName;
    private string $lastName;
    private int $popularity;

    public function __construct($_firstName, $_lastName, $_popularity)
    {
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->popularity = $_popularity;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function getPopularity()
    {
        return $this->popularity;
    }
}
