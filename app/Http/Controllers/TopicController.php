<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Vote;
use App\Http\Resources\Topic as TopicResource;
use App\Http\Resources\TopicCollection;
use App\Http\Resources\VoteCollection;
use App\Http\Resources\Vote as VoteResource;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new TopicCollection(Topic::orderBy('id', 'desc')->get());
    }

    public function create(Request $request)
    {
        die("die");   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new TopicResource(Topic::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return new TopicResource($topic);
    }

    public function edit($id)
    {
        die("die");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);
        $topic->update($request->all());
         return new TopicResource($topic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();

        return new TopicResource($topic);
    }

    public function vote(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);

        $data = $request->all();
        
        if ($data['status'] == 'down') {
            Vote::where('status', 'up')->where('topic_id', $id)->where('username', $data['username'])->delete();
        } else {
            Vote::where('status', 'down')->where('topic_id', $id)->where('username', $data['username'])->delete();
        }

        $data['topic_id'] = $id;
        $data['created_at'] = date("Y-m-d");
        $data['updated_at'] = date("Y-m-d");

        $vote = Vote::create($data);
        return new VoteResource($vote);
    }

    public function getVote(Request $request, $id)
    {
        $topic = Topic::findOrFail($id);

        $votes = collect([]);

        $status = $request->get('status');

        if ($status == 'all') {
            $votes = Vote::where('topic_id', $id)->get();
        } else {
            $votes = Vote::where('topic_id', $id)->where('status', $status)->get();
        }

        return new VoteCollection($votes);
    }
}
