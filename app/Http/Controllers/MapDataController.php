<?php

namespace App\Http\Controllers;

use App\Imports\ImportMappedData;
use App\Models\MainData;
use App\Models\MapData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use function count;
use function range;
use function view;

class MapDataController extends Controller
{
    public function index()
    {
        $mapData = MapData::orderBy('id', 'desc')->get();
        return view('pages.map-data.index', compact('mapData'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv,ods'
        ]);
        $rows = Excel::toArray(new ImportMappedData(), $request->file('excel_file'));
        $all_main_data = MainData::get();
        return view('pages.map-data.preview', compact('rows', 'all_main_data'));
    }

    public function store(Request $request)
    {
        $descriptions = $request->input('description');
        $main_data_ids = $request->input('main_data_id');
        $reasons = $request->input('reason');
        $this->saveData($descriptions, $main_data_ids, $reasons);
        return redirect()->route('map-data.index')->with('success', 'Data imported successfully');
    }

    private function saveData($description, $main_data_ids, $reason)
    {
        // Iterate through the arrays and save data with the same index in the same row
        foreach (range(0, count($description) - 1) as $index) {
            if (empty($description[$index])) {
                continue;
            }
            if (empty($main_data_ids[$index]) || empty($reason[$index])) {
                MapData::create([
                    'description' => $description[$index],
                    'main_data_id' => null,
                    'reason' => null,
                ]);
                continue;
            }
            MapData::create([
                'description' => $description[$index],
                'main_data_id' => $main_data_ids[$index],
                'reason' => $reason[$index],
            ]);
        }
    }
}
