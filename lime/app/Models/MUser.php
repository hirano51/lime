<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUser extends Model
{
    use HasFactory;
    protected $table = "m_user";
    protected $guarded =array("id");

    const CREATED_AT=null;
    const UPDATED_AT=null;
}
