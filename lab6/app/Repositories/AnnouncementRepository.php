<?php

namespace App\Repositories;

use App\Http\DTOs\AnnouncementHome;
use App\Models\Announcement;
use App\Models\Announcement as AnnouncementAlias;
use App\Repositories\Abstract\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{
    public function GetAll()
    {
        Announcement::with('images')->get();
        $announcements = Announcement::with('images')->get();
        $announcementsDtos = array();
        foreach ($announcements as $announcement) {
            $images = array();
            foreach ($announcement->images as $image) {
                $images[] = $image->url;
            }
            $announcementsDtos[] = new AnnouncementHome(
                title: $announcement->title,
                description: $announcement->description,
                id: $announcement->id,
                location: $announcement->location,
                date:$announcement->date,
                images: $images,
                likeCount: $announcement->like_count
            );
        }
        return $announcementsDtos;
    }

    public function Get(int $id): AnnouncementAlias
    {
        $element = null;

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
