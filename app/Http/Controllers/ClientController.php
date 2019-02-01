<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use JWTAuth;
use JWTAuthException;
use App\User;
use App\Client;
use App\Service;
use DB;
use Hash;
use Crypt;
use Illuminate\Support\Facades\Auth;
use JWTFactory;
use Response;
use Validator;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('admin/home')->with(compact('clients',$clients));
    }

    public function create()
    {
        return view('client/new-client');
    }

    public function store(Request $request)
    {
        // $admin= Auth::User();
        // if($admin)
        // {
            $newClient = new Client;
            $newClient->title = $request->title;
            $newClient->description = $request->description;
            $newClient->status = $request->status;
            $newClient->phone = $request->phone;
            $newClient->startDate = $request->start;
            $newClient->endDate = $request->end;

            $result = $newClient->save();
            return redirect()->route('client.index');
        //}
    }
    public function show($id)
    {
        $clientId= $id;
      //check if the request has the post ID
        if ($clientId)
        {
        //try to get the post data depending on post ID
            $result = new \stdClass();
            $client = Client::where('id',$clientId)->get();
            return view('client/client');
        }
        else
            return view('not');
    }

    public function edit($id)
    {
        $clientId= $id;
        if ($clientId)
        {
            $client = Client::where('id',$clientId)->get();
            return view('client/edit-client')->with(compact('client',$client));
        }
        else
            return view('not');
    }

    public function update(Request $request, $id)
    {
        $clientId= $id;
        $client= Client::findOrFail($clientId);
        if($client)
        {
            //     $client->title = $request->title;
            //     $client->description = $request->description;
            //     $client->status = $request->status;
            //     $client->phone = $request->phone;
            //     $client->startDate = $request->startDate;
            //     $client->endDate = $request->endDate;
            //     $client->save();

            // $result = $post->update($request->all());
            $input = $request->all();
            $client->fill($input)->save();
            return redirect()->action('ClientController@index',$id);
        }
        else
        {
            return redirect()->action('ClientController@edit',$id);
        }
    }

    public function destroy($id)
    {
        $clientId = $id;
        $client = Client::findOrFail($clientId);
        if($client)
        {
          $client->delete();
          return redirect()->action('ClientController@index');
        }
        else
        {
          return redirect()->action('ClientController@index',$id);
        }
    }
}

    