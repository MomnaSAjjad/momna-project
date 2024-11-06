<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';

    protected $fillable = [
        'name', 'name_sv', 'color', 'sort', 'icon','icon_color',
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public static function createCategory($data)
    {
         
        return self::create($data);

    }

    public function getCategory($id)
    {
        return self::findOrFail($id);
    }

    public function updateCategory($id, $data)
    {
        $category = self::findOrFail($id);
        $category->update($data);
        return $category;
    }
}
