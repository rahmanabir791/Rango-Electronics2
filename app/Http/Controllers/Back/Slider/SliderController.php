<?php

namespace App\Http\Controllers\Back\Slider;

use App\Http\Controllers\Controller;
use App\Models\Back\Slider\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $Slider;
    public function ADDmanageSlider()
    {
        return view('back.pages.slider.Add_manageSlide', [
            'SliderDetails' => Slider::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function newSlider(Request $request)
    {
        Slider::newSlider($request);
        return redirect()->back()->with('message', 'Slider Updated successfully.');
    }



    public function deleteSlider($id)
    {
        $this->Slider = Slider::find($id);
        if (file_exists($this->Slider->slidImage))
        {
            unlink($this->Slider->slidImage);
        }
        $this->Slider->delete();
        return redirect()->back()->with('message-for-delete', 'Slider deleted successfully');
    }

}
