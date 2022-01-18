<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationModel extends Model
{
    use HasFactory;
    public $table = 'relationmodels';
    public $primaryKey='id';
    public $guarded = [];
    public $timestamps=false;

    // const CREATED_AT = 'createdAt';
    // const UPDATED_AT = 'updatedAt';
}
