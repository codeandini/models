<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
}

//one to one 

class User extends Model
{
    public function profile()
    {
        return $this->hasOne(profile::class);
    }
}

class profile extends Model
{
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}

//one to many

class Author extends Model
{
    public function books()
    {
        return $this->hasMany(book::class);
    }
}

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

//many to many

class siswa extends Model
{
    public function mataKuliah()
    {
        return $this->belongsToMany(MataKuliah::class);
    }
}

class MataKuliah extends Model
{
    public function siswa()
    {
        return $this->belongsToMany(siswa::class);
    }
}