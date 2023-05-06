<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();
        $fileName = sprintf('%s-%s',
            str_replace(' ', '_', strtolower($validated['title'])),
            $validated['image_url']->getClientOriginalName()
        );
        $saveFile = Storage::putFileAs(
            'public',
            $validated['image_url'],
            $fileName
        );
        $validated['saved_image_url'] = Storage::url($saveFile);
        $validated['user_id'] = Auth::id();

        News::createNews($validated);

        return redirect()
            ->route('news.index')
            ->with('status_success', 'Successfully added news!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        if (!$news) {
            abort(404);
        }
        return view('news.show', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
