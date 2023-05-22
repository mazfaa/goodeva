<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();
        static::creating(function($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (String) Str::uuid();
            }
        });
    }

    public function getIncrementing() {
        return false;
    }

    public function getKeyType() {
        return 'string';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
}
