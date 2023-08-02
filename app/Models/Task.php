<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Employee;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $guarded = [];

    protected $primaryKey = 'id';

    public function assignee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }



}