<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApkStore extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'landing_page_id',
        'store_google_url',
        'store_btn_img_google',
        'store_samsung_url',
        'store_btn_img_samsung',
        'store_mi_url',
        'store_btn_img_mi',
        'store_oppo_url',
        'store_btn_img_oppo',
        'store_vivo_url',
        'store_btn_img_vivo'
    ];

    protected static function boot() {
        parent::boot();
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function count()
    {
        return count($this->items);
    }

    protected $casts = [

    ];

    public function getCreatedAtAttribute($date) {
        $date = \Carbon\Carbon::parse($date)->timezone('Asia/Jakarta');
        $elapsed = $date->diffForHumans();
        return $elapsed;
    }

    public function getUpdatedAtAttribute($date) {
        $date = \Carbon\Carbon::parse($date)->timezone('Asia/Jakarta');
        $elapsed = $date->diffForHumans();
        return $elapsed;
    }

    public function landingPage()
    {
        return $this->belongsTo(LandingPage::class, 'landing_page_id', 'id');
    }
}
