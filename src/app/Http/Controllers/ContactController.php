<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
public function index()
  {
    return view('contact.index');
  }

public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    return view('contact.confirm', compact('contact'));
  }

public function store(Request $request)
  {
    $contact = $request->only(['name', 'email', 'tel', 'content']);
    Contact::create($contact);
    return view('contact.thanks');
  }
}


