<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Abstract\IAnnouncementRepository;

class AnnouncementRepository implements IAnnouncementRepository
{
    private array $announcements;

    function __construct() {
        $first_one =  new Announcement (
            0,
            title: 'Зробимо набережну чистою',
            description: "Візьміть воду з собою",
            location: 'м. Васильків, вул Зарічна',
            date: '22.06.2022 16:00',
            imagesUrl: array ('poluted-river.png', 'poluted-river.png'),
            personCount: 9);
        $second_one =  new Announcement (
            1,
            title: 'Зробимо дворик більш затишним!!!',
            description: "Візьміть воду з собою",
            location: 'м. Васильків, вул Зарічна',
            date: '22.04.2022 15:00',
            imagesUrl: array ('rubbish-images.jpeg'),
            personCount: 10);
        $third_one =  new Announcement (
            2,
            title: 'Зробимо дворик більш затишним!!!',
            description: "Візьміть воду з собою",
            location: 'м. Васильків, вул Зарічна',
            date: '22.04.2022 15:00',
            imagesUrl: array ('default.png'),
            personCount: 7);
        $fourth_one = new Announcement (
            3,
            title: 'Зробимо дворик більш затишним!!!',
            description: "Візьміть воду з собою",
            location: 'м. Васильків, вул Зарічна',
            date: '22.04.2022 15:00',
            imagesUrl: array ('default.png'),
            personCount: 5);
        $this->announcements = array($first_one, $second_one, $third_one, $fourth_one);
    }

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
