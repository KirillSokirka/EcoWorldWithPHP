<?php

namespace App\Repositories;

use App\DTOs\AnnouncementHome;
use App\DTOs\AnnouncementInfo;
use App\Models\Announcement;
use App\Models\Announcement as AnnouncementAlias;
use App\Repositories\Abstract\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{
    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function GetAll() : array
    {
        $announcements = Announcement::with('images')->get();
        $announcementsDtos = array();
        foreach ($announcements as $announcement) {
            $images = array();
            foreach ($announcement->images as $image) {
                $images[] = $image->url;
            }
            $announcementsDtos[] = new AnnouncementHome(
                title: $announcement->title,
                id: $announcement->id,
                location: $announcement->location,
                date: date('d.m.Y G:i', strtotime($announcement->date)),
                images: $images,
                likeCount: $announcement->like_count
            );
        }
        return $announcementsDtos;
    }

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function Get(int $id) : AnnouncementInfo
    {
        $announcement = Announcement::with('images', 'author')->find($id);
        $element = null;
        if (isset($announcement)) {
            $images = array();
            foreach ($announcement->images as $image) {
                $images[] = $image->url;
            }
            $element = new AnnouncementInfo(
                title: $announcement->title,
                description: $announcement->description,
                id: $announcement->id,
                location: $announcement->location,
                date: date('d.m.Y G:i', strtotime($announcement->date)),
                images: $images,
                likeCount: $announcement->like_count,
                author: $announcement->author->username
            );
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
