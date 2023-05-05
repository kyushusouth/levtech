<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["title", "body"];

    public function insert() {
        $this->id = 11;
        $this->title = "insert_test2";
        $this->body = "insert";
        $this->save();
    }

    public function sortedLimitGet() {
        $data = $this->orderBy("updated_at", "desc")->take(10)->get();
        return $data;
    }

    public function sortedLimitPaginate() {
        $data = $this->orderBy("updated_at", "desc")->paginate(5);
        return $data;
    }
}
