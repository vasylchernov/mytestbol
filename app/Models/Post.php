<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    protected $fillable = ['title', 'content'];

    public function f1(): string {
        $this->searchable()->delete();
        return 'cleared'; // Ensure this matches your intended index name
    }

    // Define which attributes should be searchable
    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }

    public function searchableAs(): string
    {
        return 'dg_posts'; // Ensure this matches your intended index name
    }
}
