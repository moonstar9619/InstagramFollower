<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'))->with('page_title', 'لیست کاربران');
    }

    public function create()
    {
        $userRoles = User::getUserRoles();
        return view('admin.user.create', compact('userRoles'))->with('page_title', 'افزودن کاربر جدید');
    }

    public function store(UserRequest $userRequest)
    {
        $newUser = [
            'name' => $userRequest->input('username'),
            'wallet' => $userRequest->input('wallet'),
            'role' => $userRequest->input('role'),
            'phone' => $userRequest->input('phone'),
            'email' => $userRequest->input('email'),
            'password' =>  Hash::make($userRequest->input('password')),
        ];
        $newUserObject = User::create($newUser);
        if (is_a($newUserObject, User::class)) {
            return redirect()->route('admin.users.list')->with('success', 'کاربر جدید با موفقیت افزوده شد.');
        }
    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            $userRoles = User::getUserRoles();
            if (is_a($userItem,User::class)) {
                return view('admin.user.edit', compact('userItem','userRoles'))->with('page_title', 'ویرایش کاربر');
            }
        }
    }

    public function update(UserRequest $userRequest, $user_id)
    {
//        $inputs = request()->except('_token');
        $inputs = [
            'name' => $userRequest->input('username'),
            'phone' => $userRequest->input('phone'),
            'role' => $userRequest->input('role'),
            'email' => $userRequest->input('email'),
            'wallet' => $userRequest->input('wallet'),
            'password' =>  Hash::make($userRequest->input('password'))
        ];
        if (!$userRequest->has('password')) {
            unset($inputs['password']);
        }
        $userItem = User::find($user_id);
        $userItem->update($inputs);
        return back()->with('success', 'عملیات بروزرسانی با موفقیت انجام شد.');
    }

    public function remove($user_id)
    {
        if ($user_id && ctype_digit($user_id)) {
            $userItem = User::find($user_id);
            if (is_a($userItem, User::class)) {
                $userItem->delete();
                return redirect()->route('admin.users.list')->with('success', 'کاربر مورد نظر با موفقیت حذف شد.');
            }
        }
    }
}
