<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Region;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function map_view(Request $request): Factory|Application|View
    {
        $region_id = $request->region_id;
        $regions = Region::all();
        if ($region_id !== null){
            $districts = District::query()->where('region_id',$region_id)->get();
        }else{
            $districts = null;
        }

        return view('welcome',compact('regions','districts'));
    }

    public function create_view(): Factory|Application|View
    {
        return view('create_json');
    }

    public function create_region(): RedirectResponse
    {
        $json = File::get('storage/regions.json');
        $data = json_decode($json);

        foreach ($data->features as $item) {
            Region::query()->create([
                'id'=>$item->properties->cadastr_num,
                'name'=> $item->properties->name,
                'type'=> $item->type,
                'geometry'=> json_encode($item->geometry),
                'cadastr_num'=> $item->properties->cadastr_num,
                'region_id'=> $item->id
            ]);
        }
        return redirect()->back();

    }

    public function create_district(): RedirectResponse
    {
        $json = File::get('storage/districts.json');
        $data = json_decode($json);

        foreach ($data->features as $item) {
            District::query()->create([
                'name'=> $item->properties->name,
                'type'=> $item->type,
                'geometry'=> json_encode($item->geometry),
                'cad_raqami'=> $item->properties->cad_raqami,
                'viloyat'=>$item->properties->viloyat,
                'region_id'=> $item->properties->region_id
            ]);
        }
        return redirect()->back();
    }

    public function chart_view(): Factory|Application|View
    {
        return view('chart_view');
    }

    public function chart_pie(): Factory|Application|View
    {
        return view('chart_pie');
    }
}
