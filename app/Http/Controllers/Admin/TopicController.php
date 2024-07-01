<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminTopicRequest;
use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function create()
    {
        return view('admin.topic.create');
    }

    public function store(AdminTopicRequest $request)
    {
        Topic::create($request->all());
        return redirect()->route('admin.topic.create')->with('success', 'Topic created successfully.');
    }

}