<?php

namespace App\Models;

use App\Traits\FillWithUuid;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Supplier extends Model
{
    use HasFactory;
    use Uuid;

    protected $guarded = ['id'];

    public function stockIn()
    {
        return $this->belongsTo(StockIn::class);
    }
}
