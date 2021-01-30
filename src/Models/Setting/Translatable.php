<?php

namespace Mediabroker\Core\Models\Setting;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Translatable extends Model
{
    use HasTranslations;

    protected $table = 'translatable_settings';

    protected $fillable = ['name', 'value'];

    public $translatable = ['value'];
}
