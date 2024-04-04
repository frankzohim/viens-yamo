<?php

namespace App\Http\Controllers\Escort;
use App\Http\Controllers\Controller;
use  App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use App\Services\Api\Escort\GetEscortService;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class EscortController extends Controller{

  //List of all Escorts with town and quarter names
   public static $escorts = [];

   public function index(){

     $url=(new UrlApiService())->getUrl();

        try{

            $response = Http::asForm()->get($url."/api/escorts");
            //dd(json_decode((string) $response->getBody(), true));
            self::$escorts = json_decode((string) $response->getBody(), true);
            self::$escorts = self::$escorts['data'];
            //error_log($escorts);
        }catch(\Exception $e){
             self::$escorts = [];
        }

        return  self::$escorts;
   }

   public function list(Request $request){
     $allEscorts = $this->index();
     //dd($request->id);
        $total = count($allEscorts);
        $per_page = 12;
        $nb_pages = ceil($total/$per_page);
        $current_page = $request->id ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;
      
        $escorts = array_slice($allEscorts, $starting_point, $per_page, true);

        $escorts = new Paginator($escorts, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        

        //dd($escorts);
     return view('escort.list', compact('escorts', 'allEscorts', 'total', 'current_page', 'nb_pages'));
   }

   public function displayProfil($id, $path)
  {
     
        $url=(new UrlApiService())->getUrl();
        $response = Http::asForm()->get($url.'/api/displayprofil/'.$id.'/'.$path);
        return $response;
   
    }

  public function escortByQuater($quarterID, Request $request)
  {
     
        $allEscorts =(new GetEscortService())->getEscortByQuarter($quarterID);

        if($allEscorts){

            $total = count($allEscorts);
            $per_page = 12;
            $nb_pages = ceil($total/$per_page);
            $current_page = $request->id ?? 1;

            $starting_point = ($current_page * $per_page) - $per_page;
          
            $escorts = array_slice($allEscorts, $starting_point, $per_page, true);

            $escorts = new Paginator($escorts, $total, $per_page, $current_page, [
                'path' => $request->url(),
                'query' => $request->query(),
            ]);

            
            //dd($escorts);
            return view('escort.list', compact('escorts', 'allEscorts', 'total', 'current_page', 'nb_pages'));
        }
        else{
          return view('error');
        };
   
    }
   
}
