<?php

namespace App\Http\Controllers\Search;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Api\SearchService;

class SearchController extends Controller
{
    public function search(Request $request){

        $results = (new SearchService)->search($request->s);
      
        //dd($results);
        $term = $request->s;
        //dd($results);
        if($results){
            //retrieving all types
            $types = [];
            foreach($results as $result){
                if(array_key_exists($result['type'],$types))
                 continue;
                else{
                    switch($result['type']){
                        case "towns" :
                            $types[$result['type']]= "Villes";
                            break;
                        case "announcements" :
                            $types[$result['type']]= "Annonces";
                            break;
                        case "users" :
                            $types[$result['type']]= "Utilisateurs - Annonces";
                            break;
                        case "quarters" :
                            $types[$result['type']]= "Quartiers";
                            break;
                    }

                }

            }

            return view('search.index', compact('results', 'types', 'term'));
        }
        else{
           return view('search.index', compact('results', 'term'));
        }


    }

}
