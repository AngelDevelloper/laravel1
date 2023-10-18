<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class);
    }
}
