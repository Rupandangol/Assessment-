<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $users = User::all();
        return view('User.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return
     */
    public function store(Request $request)
    {
        $fields = $this->validation($request);
        if (User::create($fields)) {
            return redirect()->route('user.allData')->with('success', 'User Added successfully');
        }
        return redirect()->back()->with('fail', 'Failed');
    }

    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function allData()
    {
        $users = User::OrderBy('id', 'DESC')->get();
        return view('User.allData', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('User.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return
     */
    public function update(Request $request, $id)
    {
        $fields = $this->validation($request);
        $user = User::findOrFail($id);
        if ($user->update($fields)) {
            return redirect()->route('user.allData')->with('success', 'Edited Successfully');
        }
        return redirect()->back()->with('fail', 'Failed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    /**
     * Helper Methods
     */

    public function validation($req)
    {
        return $req->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'address' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required|date',
            'education_background' => 'required',
            'preferred_mode_of_contact' => 'required',
        ]);
    }
}
