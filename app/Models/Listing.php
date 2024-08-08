<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

    use HasFactory;

    //How this model find currect table?
    //By default Laravel assumes the table name is the plural form of the model name.
   
    //protected $fillable=['title','company','location','tags','email','website','description'];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' .request('tag'). '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    //Releationship To User
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
