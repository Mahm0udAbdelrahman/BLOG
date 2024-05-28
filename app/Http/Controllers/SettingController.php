<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::all();
        return view('dashboard.setting.all' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.setting.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $locales = LaravelLocalization::getSupportedLocales();

       $rules =[  

        'logo' => 'require|image',
        'favicon' => 'require|image',
        'linkdin' => 'require|string',
        'facebook' => 'require|string',
        'email' => 'require|string',
        'phone' => 'require|string',

       ];

       foreach($locales as $localeCode => $properties)
       {
        $rules["{$localeCode}.title"] = 'require|string';
        $rules["{$localeCode}.content"] = 'require|string';

       }
       $request->validate($rules);

       $allSettingWithoutImages = $request->except(['logo','favicon']);
       $setting = Setting::create($allSettingWithoutImages);
       if($request->file('logo'))
       {
          $uploadedLogo = $setting->addMediaFromRequest('logo')->toMediaCollection('images');
          $setting->update([
            'logo' => $uploadedLogo->getUrl(),

          ]);
       }

       if($request->file('favicon'))
       {
            $uploadedFavico =$setting->addMediaFromRequest('favicon')->toMediaCollection('images');

            $setting->update([
                'favicon' => $uploadedFavico->getUrl(),
            ]);



       }



    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
