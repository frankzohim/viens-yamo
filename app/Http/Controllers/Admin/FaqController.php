<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Api\Admin\FaqService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs=(new FaqService())->index();
        return view('backend.faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $faq=(new FaqService())->store($request->questions,$request->answer);

        //return $faq;
        return to_route('faqs.index')->with('success',"nouveau Faq créer avec success");
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
        $faq=(new FaqService())->show($id);

        return view('backend.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faq=(new FaqService())->update($id,$request->questions,$request->answer);

        //return $faq;
        return to_route('faqs.index')->with('success'," Faq mise a jour avec success");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq=(new FaqService())->delete($id);

        return back()->with('error',"faq suprimé avec success");
    }
}
