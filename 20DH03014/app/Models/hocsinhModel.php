<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hocsinhModel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = "tbdisciple";
    protected $primarykey='id';
    public $incrementing=false;
    protected $keyType = 'string';
}
