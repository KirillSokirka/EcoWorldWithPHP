<?php

namespace App\Http\Controllers;

use App\Repositories\Abstract\IAnnouncementRepository;
use App\Repositories\AnnouncementRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

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

    public function show($id) {
        $item = $this->repository->Get($id);
        return view('show', compact('item'));
    }

    public function create()
    {
        if (Auth::check())
            return view('create');
        else
            return redirect('/home');
    }

    public function store()
    {

    }

    public function myAnnouncements()
    {

    }


}
