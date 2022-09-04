<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class UserComplaints extends Controller
{
    public function index()
    {
        return view('web.rasisecomplaint');
    }
    public function traceComplaints()
    {
        return view('web.status');
    }
    public function create_Complaint(Request $req)
    {

        

        // $Hello = random_int(100, 9999999);
        // $helo = "cm_id";
        // $cc = new Complaint;
        // $cc->complaint_number = $helo . $Hello;
        // $cc->title = "Tes";
        // $cc->description = "Hello";
        // $cc->eid = 1;
        // $cc->c_status = "open";
        // $cc->save();
    }
}
