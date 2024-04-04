<?php

namespace App\Services\Api\Messages;

use Exception;
use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ReportService{

    public function getReports(){
        
        $url=(new UrlApiService())->getUrl();
            
            try{

                $response = Http::asForm()->get($url."/api/reports");
                
                $reports = json_decode((string) $response->getBody(), true);

                //dd($reports);
                if($reports['data'] === null){
                    return null;
                }
                else{
                    return $reports['data'];
                }

            }catch(\Exception $e){

                return null;
            }

    }

    public function create($Report){

        //dd($Report);
        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::post($url."/api/Reports", [
                'Report_name' => $Report['Report_name'],
                'town_id' => $Report['town_id'],
            ]);

            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function delete($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::delete($url."/api/reports/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function update($report){

        $url=(new UrlApiService())->getUrl();
        try{
            $response = Http::put($url."/api/reports/".$report['id'], [
                  'status' => $report['status'],
            ]);

            //dd($response);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }

    public function getReport($id){

        $url=(new UrlApiService())->getUrl();

        try{
            $response = Http::get($url."/api/reports/".$id);
            return $response;

        }
        catch(\Exception $e){
            return $e;
        }
    }
}
