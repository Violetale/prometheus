<?php

use Mediabroker\Core\Models\Currency;
use Mediabroker\Core\Models\Language;
use Mediabroker\Core\Models\Product\Product;
use Mediabroker\Core\Models\Setting\Setting;
use Mediabroker\Core\Models\Setting\Translatable as TranslatableSetting;

if (!function_exists('setting')) {
    function setting($name, $default = null)
    {
        if ($setting = Setting::where('name', $name)->first()) {
            return $setting->value;
        }

        return $default ?? collect(setting_fields())->firstWhere('name', $name)['value'];
    }
}

if (!function_exists('tr_setting')) {
    function tr_setting($name, $locale = null, $default = null)
    {
        if ($setting = TranslatableSetting::where('name', $name)->first()) {
            $locale = $locale ?? app()->getLocale();
            if (!is_null($result = $setting->getTranslation('value', $locale, false))) {
                return $result;
            }
        }

        return $default ?? collect(setting_fields())->firstWhere('name', $name)['value'];
    }
}

if (!function_exists('setting_fields')) {
    function setting_fields(): array
    {
        return collect(config('core-settings.sections'))->pluck('fields')->flatten(1)->toArray();
    }
}

if (!function_exists('current_currency')) {
    function current_currency()
    {
        return Currency::find(session('currency')) ?? Currency::getDefault();
    }
}
if (!function_exists('default_currency')) {
    function default_currency()
    {
        return Currency::getDefault();
    }
}
if (!function_exists('base_currency')) {
    function base_currency()
    {
        return Currency::getBase();
    }
}

if (!function_exists('active_currencies')) {
    function active_currencies()
    {
        return Currency::active()->orderByDesc('priority')->get();
    }
}

if (!function_exists('total')) {
    function total($format = true)
    {
        $cart = session('cart', []);
        $total = 0;

        if ($cart) {
            foreach ($cart as $id => $quantity) {
                /** @var Product $product */
                $product = Product::find($id);
                $total += convert($product->price, $product->currency) * $quantity;
            }
        }

        return $format ? currency_format($total) : $total;
    }
}

if (!function_exists('convert')) {
    function convert($value, $from, $to = null)
    {
        $to = $to ?? current_currency();

        if ($from->id === $to->id) {
            return round($value, 2);
        }

        return round($value * ($from->value / $from->nominal) / ($to->value / $to->nominal), 2);
    }
}

if (!function_exists('currency_format')) {
    function currency_format($value): string
    {
        return current_currency()->format($value);
    }
}

if (!function_exists('active_locales')) {
    function active_locales(): array
    {
        return Language::activeLocales();
    }
}
