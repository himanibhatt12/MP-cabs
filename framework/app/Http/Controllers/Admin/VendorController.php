<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImportRequest;
use App\Http\Requests\VendorRequest;
use App\Model\CitiesModel;
use App\Model\User;
use App\Model\VehicleGroupModel;
use App\Model\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Importer;

class VendorController extends Controller
{

    public function importVendors(ImportRequest $request)
    {
        $file = $request->excel;
        $destinationPath = './assets/samples/'; // upload path
        $extension = $file->getClientOriginalExtension();
        $fileName = Str::uuid() . '.' . $extension;
        $file->move($destinationPath, $fileName);

        $excel = Importer::make('Excel');
        $excel->load('assets/samples/' . $fileName);
        $collection = $excel->getCollection()->toArray();
        array_shift($collection);
        // dd($collection);
        foreach ($collection as $vendor) {
            if ($vendor[0] != null) {
                Vendor::create([
                    'name' => $vendor[0],
                    'phone' => $vendor[1],
                    'email' => $vendor[2],
                    'type' => $vendor[3],
                    'website' => $vendor[4],
                    'address1' => $vendor[5],
                    'address2' => $vendor[6],
                    'city' => $vendor[7],
                    'province' => $vendor[8],
                    'postal_code' => $vendor[9],
                    'country' => $vendor[10],
                    'note' => $vendor[11],
                ]);
            }

        }
        return back();
    }

    public function index()
    {
        // $index['data'] = Vendor::get();
        $index['data'] = User::where('user_type', 'V')->get();
        return view('vendors.index', $index);
    }

    public function create()
    {
        // $vendor_types = Vendor::orderBy("name")->groupBy("type")->get()->pluck("type")->toArray();
        // array_push($vendor_types, "Machinaries", "Fuel", "Parts", "Add New");
        // $vendor_types = array_unique($vendor_types);
        $cities = CitiesModel::get();
        $groups = VehicleGroupModel::all();
        return view('vendors.create', compact("cities", "groups"));
    }

    // private function upload_file($file, $field, $id)
    // {
    //     $destinationPath = './uploads'; // upload path
    //     $extension = $file->getClientOriginalExtension();
    //     $fileName1 = Str::uuid() . '.' . $extension;
    //     $file->move($destinationPath, $fileName1);
    //     $x = Vendor::find($id)->update([$field => $fileName1]);
    // }

    private function upload_file($file, $field, $id)
    {
        $destinationPath = './uploads'; // upload path
        $extension = $file->getClientOriginalExtension();
        $fileName1 = Str::uuid() . '.' . $extension;
        $file->move($destinationPath, $fileName1);
        $user = User::find($id);
        $user->setMeta([$field => $fileName1]);
        $user->save();
    }

    public function store(VendorRequest $request)
    {
        $id = User::create([
            "name" => $request->get("first_name") . " " . $request->get("last_name"),
            "email" => $request->get("email"),
            "password" => bcrypt($request->get("password")),
            "user_type" => "V",
            "group_id" => $request->get("group_id"),
            'api_token' => str_random(60),
            "city_id" => $request->city_id,
        ])->id;
        $user = User::find($id);
        $user->module = serialize($request->get('module'));
        $user->language = 'English-en';
        $user->save();

        if ($request->file('profile_image') && $request->file('profile_image')->isValid()) {
            $this->upload_file($request->file('profile_image'), "profile_image", $id);
        }

        // $form_data = $request->all();
        // unset($form_data['photo']);
        // unset($form_data['udf']);
        // $id = Vendor::create($form_data)->id;
        // $vendor = Vendor::find($id);
        // $vendor->udf = serialize($request->get('udf'));
        // $vendor->save();
        // if ($request->file('photo') && $request->file('photo')->isValid()) {
        //     $this->upload_file($request->file('photo'), "photo", $id);
        // }

        return redirect()->route('vendors.index');

    }

    public function edit($id)
    {
        // $index['data'] = Vendor::whereId($id)->first();
        // $vendor_types = Vendor::orderBy("name")->groupBy("type")->get()->pluck("type")->toArray();
        // array_push($vendor_types, "Machinaries", "Fuel", "Parts");
        // $index['vendor_types'] = array_unique($vendor_types);
        // $index['udfs'] = unserialize($index['data']->udf);
        $index['user'] = User::find($id);
        $index['cities'] = CitiesModel::get();
        $index['groups'] = VehicleGroupModel::all();
        return view("vendors.edit", $index);
    }

    public function update(VendorRequest $request)
    {
        $user = User::whereId($request->get("id"))->first();
        $user->name = $request->get("first_name") . " " . $request->get("last_name");
        $user->email = $request->get("email");
        $user->group_id = $request->get("group_id");
        $user->city_id = $request->city_id;
        $user->module = serialize($request->get('module'));
        $user->save();
        if ($request->file('profile_image') && $request->file('profile_image')->isValid()) {
            $this->upload_file($request->file('profile_image'), "profile_image", $user->id);
        }

        // $vendor = $request->get('id');
        // $vendor = Vendor::find($request->get("id"));
        // $vendor->name = $request->get('name');
        // $vendor->type = $request->get('type');
        // $vendor->website = $request->get('website');
        // $vendor->note = $request->get('note');
        // $vendor->phone = $request->get('phone');
        // $vendor->address1 = $request->get('address1');
        // $vendor->address2 = $request->get('address2');
        // $vendor->city = $request->get('city');
        // $vendor->province = $request->get('province');
        // $vendor->email = $request->get('email');
        // // $vendor->photo = $request->get('photo');
        // $vendor->country = $request->country;
        // $vendor->postal_code = $request->postal_code;
        // $vendor->udf = serialize($request->get('udf'));
        // $vendor->save();
        // if ($request->file('photo') && $request->file('photo')->isValid()) {
        //     $this->upload_file($request->file('photo'), "photo", $vendor->id);
        // }
        return redirect()->route('vendors.index');
    }

    public function destroy(Request $request)
    {
        User::find($request->get('id'))->delete();
        return redirect()->route('vendors.index');
    }

    public function bulk_delete(Request $request)
    {
        User::whereIn('id', $request->ids)->delete();
        return back();
    }
}
