<?php

namespace App\Repositories\Dashboard;

use App\Models\Faq;

class FaqRepository
{
    public function getFaqById(int $id)
    {
        $Faq = Faq::find($id);
        return $Faq;
    }

    public function getAllFaqs()
    {
        return Faq::orderBy('id', 'desc')->get();
    }


    public function createFaq($data)
    {
        $Faq = Faq::create($data);
        return $Faq;
    }

    public function updateFaq($data, $faq)
    {
        $faq->update($data);
        return $faq;
    }

    public function deleteFaq($Faq)
    {
        $Faq->delete();
        return $Faq;
    }


}
