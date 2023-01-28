<?php

namespace App\Http\Controllers;

use App\Mail\CustomerMail;
use App\Mail\InvoiceSend;
use App\Models\Customer;
use App\Models\Register_msg;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller {
    function add_customer(Request $request) {
        $request->validate([
            'customer_name' => 'required',
        ], [

            'customer_name.required' => 'Please give your name',
        ]);
        Customer::insert([
            'customer_name' => $request->customer_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'customer_email' => $request->customer_email,
            'customer_msg' => $request->customer_msg,
            'created_at' => Carbon::now(),

        ]);
        $details = [
            'customer_name' => $request->customer_name." ". $request->last_name,

            'phone' => $request->phone,
            'customer_email' => $request->customer_email,
            'customer_msg' => $request->customer_msg,
        ];
        $mails_addresses = ['manam.pervez@aniyanetworks.net', 'info@sahacpa.ca'];
        foreach($mails_addresses as $mails_address){
            Mail::to($mails_address)->send(new InvoiceSend($details));
        }
        return back()->with('success', 'Customer register successfully');

    }
    public function customer_list() {
        $customer_lists = Customer::all();
        return view('backend.customer.customer_list', [
            'customer_lists' => $customer_lists
        ]);
    }
    public function send_email_customer($id) {
        Mail::to(Customer::find($id)->customer_email)->send(new CustomerMail());
    }
    function multiple_email(Request $request) {
        foreach ($request->check as $id) {
            Mail::to(customer::find($id)->email)->send(new CustomerMail());
        }
        return back();
    }
    function delete_email_customer($id) {
        customer::find($id)->delete();
        return back();
    }
    public function manage_message() {
        $register_msgs = Register_msg::all();
        return view('backend.customer.manage_message', [
            'register_msgs' => $register_msgs,
        ]);
    }
    function register_msg(Request $request) {
        $request->validate([
            'register_msg' => 'required',
        ]);
        Register_msg::insert([
            'register_msg' => $request->register_msg,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }
    function detele_msg($id) {
        Register_msg::find($id)->delete();
        return back();
    }
}
