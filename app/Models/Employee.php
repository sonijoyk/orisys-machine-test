<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $guarded = [];

    protected $primaryKey = 'id';


}

