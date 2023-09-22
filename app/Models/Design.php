<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Design extends Model
{
    use HasFactory, BelongsToTenant, SoftDeletes;

    protected $fillable = [
        'project_id',
        'name',
        'archive',
        'upload'
    ];

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function view(): BelongsTo
    {
        return $this->belongsTo(View::class);
    }

}
