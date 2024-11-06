<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'subcategory';

    protected $fillable = [
        'name', 'name_sv', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function createSubcategory($data)
    {
        return self::create($data);
    }

    public function getSubcategory($id)
    {
        return self::findOrFail($id);
    }

    public function updateSubcategory($id, $data)
    {
        $subcategory = self::findOrFail($id);
        $subcategory->update($data);
        return $subcategory;
    }
}