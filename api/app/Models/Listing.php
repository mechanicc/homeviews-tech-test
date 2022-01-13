<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Listing extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'address_line_1', 'address_town', 'address_county', 'address_postal_code', 'address_country', 'cost'];

}
