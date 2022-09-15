<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stories extends Model
{
    use Sluggable;
    protected $fillable = ['title','body']; //<---- Add this line

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }
    public function user(){

        return $this->belongsTo(User::class);

    }
    public function getGetExcerptAttribute(){

        return substr($this->body, 0, 50);
    }

    public function getGetExcerptTitleAttribute(){

            return substr($this->title, 0, 20);

        }
    }