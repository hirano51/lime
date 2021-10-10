<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBase extends Model
{
    use HasFactory;
    protected $table = "t_base";
    protected $guarded =array("id");

    const CREATED_AT=null;
    const UPDATED_AT=null;
}
