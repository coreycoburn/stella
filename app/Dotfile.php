<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dotfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'scope', 'build', 'url'];
}