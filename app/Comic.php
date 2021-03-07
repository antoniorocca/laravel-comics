<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
   protected $fillable = ['cover', 'title', 'availability', 'description', 'artists', 'writers', 'series', 'price', 'sale_date', 'volume', 'trim_size', 'page_count', 'rated'];
}
