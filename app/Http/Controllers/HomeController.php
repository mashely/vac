<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $domain = 'https://www.mienxy.com';
        $client = new \GuzzleHttp\Client();


        $jinsiaApi = $client->get($domain.'/api/devs/jinsia');

        if($jinsiaApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        }
        // $i =  array_column(json_decode($iApi->getBody()), 'url_content');      
        $jinsiaTaarifa = json_decode($jinsiaApi->getBody(), true);



    // $response = json_decode($result->getBody(),true);
        // $user =   $response['user'];//access key



        $umriApi = $client->get($domain.'/api/devs/umri');

        if($umriApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        }
        $umriTaarifa = json_decode($umriApi->getBody(), true);





        $mahaliApi = $client->get($domain.'/api/devs/mahali');

        if($umriApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        }
        $mahaliTaarifa = json_decode($mahaliApi->getBody(), true);




        $AinazaunyanyasajiApi = $client->get($domain.'/api/devs/Ainazaunyanyasaji');

        if($AinazaunyanyasajiiApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        } 
        $AinazaunyanyasajiTaarifa = json_decode($AinazaunyanyasajiiApi->getBody(), true);





        $muhusikawaunyanyasajiApi = $client->get($domain.'/api/devs/muhusikawaunyanyasaji');

        if($muhusikawaunyanyasajiApi->getStatusCode() != 200){
            return redirect()->back()->with('error', 'Sorry!, no internet connection');
        }
        $muhusikawaunyanyasajiTaarifa = json_decode($muhusikawaunyanyasajiApi->getBody(), true);








        $mme= $jinsiaTaarifa['mme'];
        $mke= $jinsiaTaarifa['mke'];



        $kijinsia= $AinazaunyanyasajiTaarifa['kijinsia'];
        $kimwili= $AinazaunyanyasajiTaarifa['kimwili'];
        $kihisia= $AinazaunyanyasajiTaarifa['kihisia'];
    



        $kinondoni= $mahaliTaarifa['kinondoni'];
        $kigamboni= $mahaliTaarifa['ilala'];
        $ilala= $mahaliTaarifa['kigamboni'];
        $temeke= $mahaliTaarifa['temeke'];
        $ubungo= $mahaliTaarifa['ubungo'];




         $zaidiya25= $umriTaarifa['zaidiya25'];
         $katiya18na28= $umriTaarifa['katiya18na28'];
         $katiya8hadi17  = $umriTaarifa['katiya8hadi17'];
         $chiniya8 = $umriTaarifa['chiniya8'];




         $mzazi= $muhusikawaunyanyasajiTaarifa['mzazi'];
         $mlezi= $muhusikawaunyanyasajiTaarifa['mlezi'];
         $mtumwingine= $muhusikawaunyanyasajiTaarifa['mtumwingine'];
    





        return view('home')->with(array('mme'=>$mme, 'mke'=>$mke, 'zaidiya25'=>$zaidiya25,
        'katiya18na28'=>$katiya18na28, 'katiya8hadi17'=>$katiya8hadi17, 
        'chiniya8'=>$chiniya8, 'kinondoni'=>$kinondoni, 'ilala'=>$ilala, 'kigamboni'=>$kigamboni, 
     'temeke'=>$temeke, 'ubungo'=>$ubungo,'kijinsia'=>$kijinsia, 'kimwili'=>$kimwili,
        'kihisia'=>$kihisia, 'mzazi'=>$mzazi, 'mlezi'=>$mlezi, 'mtumwingine'=>$mtumwingine ));
    }
}
