<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Abstract\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{

    public function GetAll(): array
    {
        return $this->announcements;
    }

    public function Get(int $id): Announcement
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

    public function Create(Announcement $item)
    {
        // TODO: Implement Create() method.
    }

    public function Update(Announcement $item)
    {
        // TODO: Implement Update() method.
    }

    public function Delete(int $id)
    {
        // TODO: Implement Delete() method.
    }
}
