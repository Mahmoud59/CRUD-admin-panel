<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Client;
class ServiceController extends Controller
{
    public function index()
    {
        echo "string";
    }

    public function create()
    {
        $clients = Client::all();
        return view('service/new-service')->with(compact('clients',$clients));
    }

    public function store(Request $request)
    {
        // $admin= Auth::Admin();
        // if($admin)
        // {
            $newService = new service;
             $newService->title = $request->title;
             $newService->description = $request->description;
             $newService->userId = $request->userId;
             $newService->link = $request->link;
            foreach ($request->input("type") as $type){
                    $newService->type= $type;
                    $newService->save();
            }
            // $input = $request->all();
            // $newService->fill($input)->save();
            // return redirect()->route('client.index');
        // }
        // else
        // {
        //     return ;
        // }
    }
    public function show($id)
    {
        $clientId= $id;
        $client = Client::findOrFail($clientId);
        if ($client)
        {
            $services = service::with('client')->where('userId',$clientId)->get();
            return view('service/service')->with(compact('services',$services));
            //echo "<pre>";print_r($services);echo "</pre>";
        }
        else
            return view('not');
    }

    public function edit($id)
    {
        $serviceId= $id;
        if ($serviceId)
        {
            $service = service::with('client')->where('id',$serviceId)->get();
            $clients = Client::all();
            return view('service/edit-service')->with(compact('service',$service))->with(compact('clients',$clients));
        }
        else
            return view('not');
    }

    public function update(Request $request, $id)
    {
        $serviceId= $id;
        $service= Service::findOrFail($serviceId);
        if($service)
        {
            $service->title = $request->title;
             $service->description = $request->description;
             $service->userId = $request->userId;
             $service->link = $request->link;
            foreach ($request->input("type") as $type){
                    $service->type= $type;
                    $service->save();
            }

            // $result = $post->update($request->all());
            // $input = $request->all();
            // $service->fill($input)->save();
            return redirect()->route('client.index');
        }
        else
        {
            return redirect()->action('serviceController@edit',$id);
        }
    }

    public function destroy($id)
    {
        $serviceId = $id;
        $service = service::findOrFail($serviceId);
        if($service)
        {
          $service->delete();
          return redirect()->action('ServiceController@index');
        }
        else
        {
          return redirect()->action('ServiceController@index');
        }
    }
}