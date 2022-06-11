<?php

namespace App\Http\Controllers;

use App\Repositories\Abstract\IAnnouncementRepository;
use App\Repositories\AnnouncementRepository;
use Illuminate\Routing\Controller as BaseController;
use function Symfony\Component\Translation\t;

class AnnouncementController extends BaseController
{
    private IAnnouncementRepository $repository;

    public function __construct(AnnouncementRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->GetAll();
    }
}
