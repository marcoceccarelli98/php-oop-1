<?php

class Genre
{
    private string $name;
    private bool $noMinor;
    private string $textColor;

    public function __construct($_name, $_noMinor, $_textColor)
    {
        $this->name = $_name;
        $this->noMinor = $_noMinor;
        $this->textColor = $_textColor;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getNoMinor(): bool
    {
        return $this->noMinor;
    }
    public function getTextColor(): string
    {
        return $this->textColor;
    }
}
