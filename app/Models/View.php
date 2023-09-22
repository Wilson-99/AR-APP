<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class View extends Model
{
    use HasFactory, BelongsToTenant, SoftDeletes;

    protected $fillable = [
        'user_id',
        'design_id',
        'view_type',
        'view_time'
    ];

    public function users(): HasMany
    {
        return $this->HasMany(User::class);
    }

    public function designs(): HasMany
    {
        return $this->HasMany(Design::class);
    }
}
