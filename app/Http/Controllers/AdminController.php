<?php

namespace App\Http\Controllers;

use App\Models\Admin;

use Illuminate\Http\Request;
use File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::all();
        return view('admin.index_admin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = new Admin;
        $requested_data = $request->all();
        $upload_path = 'Admin_Panel/admin/';

        if ($request->file('photo')) {
            $image = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $image_url = $upload_path . $image;
            $request->file('photo')->move($upload_path, $image);
            $requested_data['photo'] = $image_url;
        }

        $data->fill($requested_data)->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Admin::findOrFail($id);
        return view('admin.edit_admin', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data = Admin::findOrFail($id);

            $requested_data = $request->all();
            $upload_path = 'Admin_Panel/admin/';
            if ($request->file('photo')) {
                $image = time() . '.' . $request->file('photo')->getClientOriginalExtension();
                $image_url = $upload_path . $image;
                $request->file('photo')->move($upload_path, $image);
                if (File::exists($request->old_photo)) {
                    unlink($request->old_photo);
                }
                $requested_data['photo'] = $image_url;
            }
            $success = $data->fill($requested_data)->save();
        if ($success) {
            $notification = array(
                'message' => 'Successfully Product Edited',
                'alert' => 'Success'
            );
        }
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Admin::findOrFail($id);
        $image = $data->photo;
        if (File::exists($image)) {
            unlink($image);
        }
        $data->delete();
        return back();
    }
}
