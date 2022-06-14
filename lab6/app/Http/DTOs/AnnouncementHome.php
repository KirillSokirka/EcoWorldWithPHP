<?php

namespace App\Http\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

class AnnouncementHome extends DataTransferObject
{
    public int $id;
    public string $title;
    public string $description;
    public string $location;
    public string $date;
    public array $images;
    public int $likeCount;
}
