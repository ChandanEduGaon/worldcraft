<?php

namespace App\Models\world_craft_admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'home';
    protected $primaryKey = 'id';
    protected $fillable = [
        'type',
        'title',
        'description',
        'short_description',
        'url',
        'image',
        'site_links'
    ];
}
