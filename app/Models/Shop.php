<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Shop extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'user_id',
        'logo',
        'category_id',
        'description',
        'open_hours',
        'city',
        'address'
    ];


    public static function find($id)
    {
        $shops = self::all();
        foreach ($shops as $shop) {
            if ($shop['id'] == $id) {
                return $shop;
            }
        }
    }


    public function scopeFilterUser($query, $user)
    {
        if ($user ?? false) {
            $query->where('user_id', $user);
        }
    }

    public function scopeFilterCategory($query, $category)
    {
        if ($category ?? false) {
            $query->where('category_id', $category);
        }
    }

    public function scopeFilter($query, $filters)
    {
        if (User::where('name', 'like', '%' . $filters . '%')->value('id')) {
            $user_id = User::where('name', 'like', '%' . $filters . '%')->value('id');
        } else {
            $user_id = null;
        }
        if (Category::where('name', 'like', '%' . $filters . '%')->value('id')) {
            $category_id = Category::where('name', 'like', '%' . $filters . '%')->value('id');
        } else {
            $category_id = null;
        }

        if ($filters ?? false) {
            $query->where('name', 'like', '%' . $filters . '%')
                ->orWhere('city', 'like', '%' . $filters . '%')
                ->orWhere('address', 'like', '%' . $filters . '%')
                ->orWhere('open_hours', 'like', '%' . $filters . '%')
                ->orWhere('description', 'like', '%' . $filters . '%')
//                ->orWhere('category_id', 'like', '%' . Category::where('name','like','%'. $filters.'%')->value('id') . '%')
                ->orWhere('category_id', $category_id)
                ->orWhere('user_id', $user_id);


        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
