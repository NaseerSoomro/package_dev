<?php

namespace Basecamp\Contact\Http\Controllers;
use Basecamp\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return redirect()->back()->with('message', 'Contact Information Saved Successfully');
    }
}
