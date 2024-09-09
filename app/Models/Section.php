<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'landing_page_id',
        'section_1_title',
        'section_2_title',
        'section_3_subtitle_1',
        'section_3_subtitle_2',
        'section_3_subtitle_3',
        'section_3_subtitle_4',
        'section_4_title',
        'section_5_title',
        'section_6_title',
        'section_7_title',
        'section_1_desc',
        'section_2_desc',
        'section_3_subdesc_1',
        'section_3_subdesc_2',
        'section_3_subdesc_3',
        'section_3_subdesc_4',
        'section_4_desc',
        'section_5_desc',
        'section_6_desc',
        'section_7_desc',
        'section_1_img',
        'section_2_img',
        'section_3_img',
        'section_4_img',
        'section_5_img',
        'section_6_img',
        'section_7_img',
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
