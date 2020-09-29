<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

class Comment extends Model
{

    protected $guarded = [];

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        $user = \App\User::where('id', $this->author_id)->first();
        $project = \App\Project::where('id', $this->project_id)->first();
        $formated_date = \Carbon\Carbon::parse($this->created_at)->format('d/m/Y');

        $this->title_identifier = "Comment from <b><i>".$user->name."</i></b> for project <b><i>".$project->title."</i></b> on ".$formated_date;
       
        return parent::save();
    }

    public function authorId()
    {
        return $this->belongsTo(Voyager::modelClass('User'), 'author_id', 'id');
    }

    public function projectId()
    {
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }
}
