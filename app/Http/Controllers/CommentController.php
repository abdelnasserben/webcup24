<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use App\Models\Course;

class CommentController
{
    /**
     * Store a newly created comment in storage.
     */
    public function store(CommentFormRequest $request)
    {

       Comment::create($request->validated());
        return back()->with('success', 'le commentaire a bien été ajouté');
    }
}
