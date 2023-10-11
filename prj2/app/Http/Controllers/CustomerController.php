<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customers)
    {
        //
    }
    public function login(){
        return view('customers.login');
    }
    public function loginProcess(Request $request){
        $account = $request->only(['email', 'password']);
        if (Auth::guard('customer')->attempt($account)){
            //lay thong tin cua cus dang login
            $customer = Auth::guard('customer')->user();
            Auth::guard('customer')->login($customer);
            session(['customer'=>$customer]);
            return Redirect::route('categories.index');
//            dd($customer);
            //cho login
        }else{
            //quay ve trang login
            return Redirect::back();
        }
    }
    public function logout(){
        Auth::guard('customer')->logout();
        return Redirect::route('customers.login');
    }
}
