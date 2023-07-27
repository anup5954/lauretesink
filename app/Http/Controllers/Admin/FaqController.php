<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.faqs', compact('faqs'));
    }

    public function saveFaq(Request $request)
    {
        $faq = new Faq();
        $faq->heading =  $request->heading;
        $faq->description =  $request->description;
        $faq->save();
        return redirect()->route('faq')->with('success', 'Faq added successfully.');
    }

    public function editFaq($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.faqs-edit', compact('faq'));
    }

    public function updateFaq(Request $request, $id)
    {
        $faq = Faq::find($id);
        $faq->heading =  $request->heading;
        $faq->description =  $request->description;
        $faq->save();
        return redirect()->route('faq')->with('success', 'Faq updated successfully.');
    }

    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faq')->with('success', 'Faq deleted successfully.');
    }
}
