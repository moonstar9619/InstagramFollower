<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.list', compact('packages'))->with('page_title', 'لیست پکیج ها');
    }

    public function create()
    {
        return view('admin.package.create')->with('page_title', 'افزودن پکیج جدید');
    }

    public function store(PackageRequest $packageRequest)
    {
//        dd($packageRequest);
        $newPackage = [
            'name' => $packageRequest->input('name')
        ];
        $newPackageObject = Package::create($newPackage);
        if(is_a($newPackageObject,Package::class)){
            return redirect()->route('admin.packages.list')->with('success', 'پکیج جدید با موفقیت ایجاد شد.');
        }
    }

    public function edit($package_id)
    {
        if ($package_id && ctype_digit($package_id)) {
            $packageItem = Package::find($package_id);
            if (is_a($packageItem, Package::class)) {
                return view('admin.package.edit', compact('packageItem'))->with('page_title', 'ویرایش کاربر');
            }
        }
    }

    public function update(PackageRequest $packageRequest, $package_id)
    {
        $inputs = $packageRequest->except('_token');
        $packageItem = Package::find($package_id);
        $packageItem->update($inputs);
        return redirect()->route('admin.packages.list')->with('success', 'عملیات ویرایش با موفقیت انجام شد.');
    }

    public function remove($package_id)
    {
        if ($package_id && ctype_digit($package_id)) {
            $packageItem = Package::find($package_id);
            if (is_a($packageItem,Package::class)) {
                $packageItem->delete();
                return redirect()->route('admin.packages.list')->with('success', 'عملیات حذف با موفقیت انجام شد.');
            }
        }
    }

}
