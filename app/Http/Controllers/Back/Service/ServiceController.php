<?php

namespace App\Http\Controllers\Back\Service;

use App\Http\Controllers\Controller;
use App\Models\Back\Service\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addManageService()
    {
        return view('back.pages.installation_service.service', [
            'Services' => Service::orderBy('id' , 'DESC')->get()->all(),
        ]);
    }

    public function newService(Request $request)
    {
        Service::newService($request);
        return redirect()->back()->with('message', 'Service Created successfully.');
    }


    public function editService($id)
    {
        return view('back.pages.installation_service.editService', [
            'service'   => Service::find($id),
        ]);
    }

    public function updateService (Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect()->back()->with('message', 'Service updated successfully');
    }

    public function deleteService($id)
    {
        $this->events = Service::find($id);
        if (file_exists($this->events->image))
        {
            unlink($this->events->image);
        }
        $this->events->delete();
        return redirect()->back()->with('message-for-delete', 'Service Deleted successfully');
    }
}
