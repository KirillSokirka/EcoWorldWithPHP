<?php

namespace App\Http\Controllers;

use App\DTOs\AnnouncementCreate;
use App\Http\Requests\AnnouncementStoreRequest;
use App\Repositories\Abstract\IAnnouncementRepository;
use App\Repositories\AnnouncementRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

function getAllImages(AnnouncementStoreRequest $request) {

    $files = array();
    if($request->hasfile('images'))
    {
        foreach($request->file('images') as $image)
        {
            $files[] = $image;
        }
    }
    return $files;
}

class AnnouncementController extends BaseController
{
    private IAnnouncementRepository $repository;

    public function __construct(AnnouncementRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->repository->GetAll()
        ]);
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
            return redirect('/');
    }

    /**
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function store(AnnouncementStoreRequest $request)
    {
        $validated = $request->validated();
        $author_id = Auth::id();
        $dto = new AnnouncementCreate(
            title: $validated['title'],
            description: $validated['description'],
            location: $validated['location'],
            date: date('d.m.Y G:i', strtotime($validated['date'])),
            images: getAllImages($request),
            author_id: $author_id
        );
        $this->repository->Create($dto);
    }

    public function myAnnouncements()
    {

    }

}
