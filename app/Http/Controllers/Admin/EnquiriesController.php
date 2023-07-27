<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\popupEnquery;
use App\Models\subscribe;
use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    public function contactEnquiries()
    {
        $contacts  = Contact::orderBy('id', 'DESC')->get();
        return view('admin.enquires.contact-enquiries', compact('contacts'));
    }

    public function deleteContactEnquiries($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contactEnquiries')->with('success', 'Enquiry deleted successfully');
    }
    /* public function productEnquiries()
    {
        $subscribes = subscribe::orderBy('id', 'DESC')->get();
        return view('admin.enquires.product-enquiries', compact('subscribes'));
    } */

    public function subscriber()
    {
        $subscribes = subscribe::orderBy('id', 'DESC')->get();
        return view('admin.enquires.subscriber', compact('subscribes'));
    }

    public function deleteSubscribeEmail($id)
    {
        $subscribes = subscribe::find($id);
        $subscribes->delete();
        return redirect()->route('subscriber')->with('success', 'Subscribe email deleted successfully');
    }

    public function leadenquiries()
    {
        $enquires = popupEnquery::orderBy('id', 'DESC')->get();
        return view('admin.popup-enquery', compact('enquires'));
    }

    public function deleteLeadenquiry($id)
    {
        $enquires = popupEnquery::find($id);
        $enquires->delete();
        return redirect()->route('leadenquiries')->with('success', 'Enquery deleted successfully');
    }
}
