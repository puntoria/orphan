<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function owner() {
    	return $this->belongsTo('App\Orphan', 'orphan_id');
    }
}
