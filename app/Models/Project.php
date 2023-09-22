<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Project extends Model
{
    use HasFactory, BelongsToTenant, SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status'
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function designs(): BelongsTo
    {
        return $this->belongsTo(Design::class);
    }

    public function coments(): BelongsTo
    {
        return $this->belongsTo(Coment::class);
    }

}
