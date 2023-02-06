<?php

namespace Basecamp\Contact\Http\Controllers;
use Basecamp\Contact\Models\Contact;
use Basecamp\Contact\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function create()
    {
        return view('contact::register');
    }

    public function store(Request $request)
    {
        // Contact::create($request->all());
        $contact = new User;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->password = Hash::make($request->password);

        if($contact->save())
        {
            return redirect()->back()->with('success', 'Contact Information Saved Successfully');
        }
    }

    public function contact(Request $request)
    {
        // Contact::create($request->all());
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->password = Hash::make($request->password);

        if($contact->save())
        {
            return redirect()->back()->with('success', 'Contact Information Saved Successfully');
        }
    }
}
