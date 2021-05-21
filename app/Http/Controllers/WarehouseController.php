<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Laracasts\Flash\Flash;

class WarehouseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['sentinel']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Sentinel::hasAccess('stock')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        $data = Warehouse::all();
        return view('warehouse.data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Sentinel::hasAccess('stock.create')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        return view('warehouse.create', compact(''));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Sentinel::hasAccess('stock.create')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        $warehouse = new Warehouse();
        $warehouse->name = $request->name;
        $warehouse->notes = $request->notes;
        $warehouse->save();
        Flash::success("Successfully Saved");
        return redirect('warehouse/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($warehouse)
    {
        if (!Sentinel::hasAccess('stock.update')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        return view('warehouse.edit', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Sentinel::hasAccess('stock.update')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        $warehouse = Warehouse::find($id);
        $warehouse->name = $request->name;
        $warehouse->notes = $request->notes;
        $warehouse->save();
        Flash::success("Successfully Saved");
        return redirect('warehouse/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if (!Sentinel::hasAccess('stock.delete')) {
            Flash::warning("Permission Denied");
            return redirect('/');
        }
        Warehouse::destroy($id);
        Flash::success("Successfully Deleted");
        return redirect('warehouse/data');
    }



     public function register_url(){

        $consumer_key = "J8hUidanXkS4gb5XuGX8IyQsxo2JLEIS";
        $consume_secret = "NVOn6WtMNEGfvUGB";
        $headers = ['Content-Type:application/json','Charset=utf8'];
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl,CURLOPT_USERPWD,$consumer_key.':'.$consume_secret);

        $curl_response = curl_exec($curl);
        $result = json_decode($curl_response);

        // return array($result);

        $access_token = $result->access_token;

        curl_close($curl);

        $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
  
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
        
        $curl_post_data = array(
            'ShortCode' =>"4050997",
            'ResponseType' => 'Completed',
            'ConfirmationURL' => '',
            'ValidationURL' => ''
        );
        
        $data_string = json_encode($curl_post_data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        
        $curl_response = curl_exec($curl);
        echo $curl_response;
    }
}
