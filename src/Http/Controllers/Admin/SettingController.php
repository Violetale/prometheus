<?php

namespace Mediabroker\Core\Http\Controllers\Admin;

use Mediabroker\Core\Http\Controllers\Controller;
use Mediabroker\Core\Http\Requests\Setting\SettingRequest;
use Mediabroker\Core\Models\Category;
use Mediabroker\Core\Models\Language;
use Mediabroker\Core\Services\FilterService;
use Mediabroker\Core\Services\SettingService;

class SettingController extends Controller
{
    /** @var SettingService $setting */
    private $setting;

    /**
     * @param SettingService $setting
     */
    public function __construct(SettingService $setting)
    {
        $this->setting = $setting;
    }

    public function index()
    {
        $locales = Language::activeLocales();
        return view('core::admin.settings.index', compact('locales'));
    }

    public function store(SettingRequest $request)
    {
        $this->setting->store($request);

        $categories = Category::all();
        foreach ($categories as $category){
            FilterService::editFiltersFiles($category);
        }

        return back()->with('success', 'Настройки были успешно сохранены');
    }
}
