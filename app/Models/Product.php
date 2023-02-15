<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $categoriesId
 * @property $name
 * @property $price
 * @property $tva
 * @property $description
 * @property $image
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{

    static $rules = [
		'categoriesId' => 'required',
		'image' => 'required'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categoriesId',
        'name',
        'price',
        'tva',
        'description',
        'image',
        'stock'
    ];



}
