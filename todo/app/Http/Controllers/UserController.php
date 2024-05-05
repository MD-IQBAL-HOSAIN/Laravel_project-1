<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
    //   $alluser = User::paginate(10);
    // $alluser = User::Paginate(2);
    $alluser = User::with('profile')->paginate(10);
    // dd($alluser);
      return view('users.index',['users'=>$alluser]);
      //(users.index) mean users folder ere index.blade.php file.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function profiletest()
    {
        $user = User::find(88);
        // return view('users.profile', ['user' => $user]);
        $pro = new profile();
        $pro->first_name=fake()->firstName();
        $pro->last_name=fake()->lastName();
        $pro->phone=fake()->phoneNumber();
        $pro->address=fake()->address();
        $pro->image=fake()->imageUrl(640, 480, 'animals', true);
        $pro->gender=fake()->randomElement(['male', 'female', 'other']);
        $pro->birthday=fake()->date();
        $pro->website=fake()->url();
        $pro->description =fake()->text(100);
        $pro->status =fake()->numberBetween(0,1);

       $result = $user->profile()->save($pro);
       dd($result);

    }
}
