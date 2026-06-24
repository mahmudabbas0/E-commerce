<?php

namespace App\Services\Dashboard;

use App\Repositories\Dashboard\faqRepository;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\DataTables;

class FaqService
{
    protected $faqRepository;
    public function __construct(faqRepository $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }
    public function getAllfaqs()
    {
        $faqs = $this->faqRepository->getAllfaqs();
        return Datatables::of($faqs)
            ->addIndexColumn()
            ->addColumn('question', function ($faq) {
                return $faq->question;
            })
            ->addColumn('answer', function ($faq) {
                return $faq->answer;
            })
            ->addColumn('created_at', function ($faq) {
                return $faq->created_at;
            })
            ->addColumn('actions', function ($faq) {
                return view('dashboard.faqs.datatables.actions', compact('faq'))->render();
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
    public function getfaqById($id){
        $faq = $this->faqRepository->getfaqById($id);
        if(!$faq){
            abort(404);
        }
        return $faq;
    }

    public function createfaq($data){
        $faq = $this->faqRepository->createfaq($data);
        return $faq;
    }

    public function updatefaq($id,$data){
        $faq = $this->getfaqById($id);

        return $this->faqRepository->updatefaq($data,$faq);
    }

    public function deletefaq($id){
        $faq = $this->getfaqById($id);
        return $this->faqRepository->deletefaq($faq);
    }


}
