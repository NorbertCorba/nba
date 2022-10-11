<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;


class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = ['name', 'team_id', 'first_name', 'last_name'];


    public function team() {

        return $this->belongsTo(Team::class);
    }

}
