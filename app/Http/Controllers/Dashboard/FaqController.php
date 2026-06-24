<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Dashboard\FaqService;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;

    }
    public function getAllFaq()
    {
        return $this->faqService->getAllfaqs();
    }

    public function index()
    {
        return view('dashboard.faqs.index');
    }

    public function create()
    {
        return view('dashboard.faqs.create');
    }

    public function store(Request $request)
    {
        $faq =$this->faqService->createfaq($request->except('_token'));
        if (!$faq) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.faqs.index')->with('success', __('dashboard.faq_created'));
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $faq = $this->faqService->getFaqById($id);
        return view('dashboard.faqs.edit', compact('faq'));
    }

    public function update(Request $request, string $id)
    {
        $faq=$this->faqService->updatefaq($id,$request->except('_token'));
        if (!$faq) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.faqs.index')->with('success', __('dashboard.faq_updated'));
    }

    public function destroy(string $id)
    {
        $faq=$this->faqService->deletefaq($id);
        if (!$faq) {
            return redirect()->back()->with('error', __('dashboard.something-went-wrong'));
        }
        return redirect()->route('dashboard.faqs.index')->with('success', __('dashboard.faq_deleted'));
    }


}
