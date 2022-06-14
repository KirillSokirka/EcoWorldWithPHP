<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Models\Announcement as AnnouncementAlias;
use App\Repositories\Abstract\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{
    public function GetAll()
    {
        return Announcement::with('images')->get();
    }

    public function Get(int $id): AnnouncementAlias
    {
        $element = null;
        foreach ($this->announcements as $a) {
            if ($a->id == $id) {
                $element = $a;
                break;
            }
        }
        return $element;
    }

    public function Create(AnnouncementAlias $item)
    {
        // TODO: Implement Create() method.
    }

    public function Update(AnnouncementAlias $item)
    {
        // TODO: Implement Update() method.
    }

    public function Delete(int $id)
    {
        // TODO: Implement Delete() method.
    }
}
