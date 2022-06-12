<?php

namespace App\Models;

use phpDocumentor\Reflection\PseudoTypes\List_;

class Announcement
{
    public int $id;
    public string $title;
    public string $description;
    public string $location;
    public string $date;
    public array $imagesUrl;
    public int $personCount;

    function __construct($id,$title, $description, $location, $date, $imagesUrl, $personCount)
    {
        $this->id = $id;
        $this->title=$title;
        $this->description=$description;
        $this->location=$location;
        $this->date=$date;
        $this->imagesUrl=$imagesUrl;
        $this->personCount=$personCount;
    }
}
