<?php

namespace App\Repositories\Abstract;

use App\Models\Announcement;

interface IAnnouncementRepository
{
    public function GetAll();
    public function Get(int $id) : Announcement;
    public function Create(Announcement $item);
    public function Update(Announcement $item);
    public function Delete(int $id);
}
