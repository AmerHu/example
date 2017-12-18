<?php

namespace App;


use Carbon\Carbon;

class Post extends Model
{
    public $timestamps = true;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query )
    {
        if ($month = request('month')) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if ($year = request('year')) {
            $query->whereYear('created_at', $year);
        }
    }


    public static function archives()
    {
        return static::selectRaw('year(created_at)year, monthname(created_at)month,count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)desc')
            ->get()
            ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
