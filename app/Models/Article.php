<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'text',
        'category_id',
        'image',
        ];
    
    public function getPaginateByLimit(int $limit_count = 3)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
         return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    //記事の画像アップロードについて(複数枚の画像を保持)
    public function images()
    {
        return $this->hasMany(Image::class);
    }


}