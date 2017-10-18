<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{

    public function getAnalyticsSummary(Request $request){
        $from_date = date("Y-m-d", strtotime($request->get('from_date',"7 days ago")));
        $to_date = date("Y-m-d",strtotime($request->get('to_date',$request->get('from_date','today')))) ; 
        $gAData = $this->gASummary($from_date,$to_date) ;
        return $gAData;
    }
         //to get the summary of google analytics.
    private function gASummary($date_from,$date_to) {
        $service_account_email = 'epilpesy@epilepsy-181216.iam.gserviceaccount.com';       
        // Create and configure a new client object.
        $client = new \Google_Client();
        $client->setApplicationName("{Epilepsy}");
        $analytics = new \Google_Service_Analytics($client);
        $cred = new \Google_Auth_AssertionCredentials(
            'epilpesy@epilepsy-181216.iam.gserviceaccount.com',
            array(\Google_Service_Analytics::ANALYTICS_READONLY),
              "{\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCNd17mS2x18mj5\nPjz57XFDv3KOdMTNfY1+s38Jwd4ziuWcFQi2m9JgWD8B1x3Lu/l13V21m6f11v5+\n5Ta+QfVsO7yRGJmTbuXcczWkqDyM7QdNHW6xsFR+NC/2Gn2KdkXvclQ/iU+TdS5b\nJzh7jzPGRBAwhWpZWDdkhpBAvOR/Q2PlPye+1+itinGDOYjYRc5PX2qmwEd0AaI5\nMI6K3A1AktfOZJUTxT6ETWY9AvOkMqpC5e0CUYBULjCi2uZhfg/MBtA/epse+r0d\nc0dg687rfU3riLDsYMhxntSZZ1J+SzJO6PDDDsyoMlW67Y1ZAHDqMHvv/6j7nFXU\nsLGKX9wZAgMBAAECggEAID5gfXocdwexAHo8mLSTd98Xg7u+rZ2b1hCgeH9dH39d\nlUVADqsWeMo0Vj2LN4gZNFGnzcB0OHbv28lvwE61Wx2EfcfPHUkOEECcLfMAlhhi\nbSOzusFXiMppUh04lwodJ5X1+ONZpWD0l2cpmxQJN3wE+qI2GrYeLgXztCW5qP3C\n40CIoxOUTiqPxYpjTonJS7LavGdpR3a8Uombee+p8yh/braIf7Td6mhPJ70jqLfR\n/94WZoXvcgrnJUmA4S5tHdMi7Qq7R6JGH+68ytLI5umuafOfkcK5MgRBv4Ij+qsd\nNr6qnIE0V3k3acsVr/JpSidhZAGe+iJ3tHh5awaXrwKBgQDFsB3m8+YQpc2EUZhS\nK430e2ZNDduoLOXHhdoYhk5kEhQqPdmAS5jWhByrkfbsFjkKG9m5eG6qyppDr0FS\n5cKZy1jBD1ZDyiEDwxt4OZ321J4vL9pnRenZ05Zz3FJcWcCCwAQL+WJbTc+tQgnh\nuxe/XsQb48vCOmk/pq4zTdi/3wKBgQC3MdLW+MkMd/F5ErW9MVS8VWoXRwWeT8WX\n7QjGHKFEzpUeZem0lyKZ5vEuHAHv2uZTC4xSK8iha8BpreExeeBJGuwsB0PTq6U1\nYtzs4xWrkd6++MtnqTgCqi0F6117Qef+/KySZvG+RATqLe+drttY9PCGr/lXQwNK\nkmbJey0DBwKBgBAW83gWpcT5Ga8JTRJzBQy+9maTGCup69G/bS7Nz5eJeSau/gLZ\nJElhW0wDh0tTy7Ss652S1b8E2mVj4Dc1CA+oY0LjUqwVyXYa7SNt3RN33qAMjwQU\nxqG5/ObVKcbmbyq1Ih8vXvf7b0m0tEUxCw/CUMfMVIssYeCSWl9GmLuVAoGBAIDE\ngsEcaqVbAd7qqdhsfnVLTKFECMz4oZliwdIPecQVuXd+h0GrImUvkcOpaCsioNcq\nvN1dbU8ZoEwoLqxKUL7SL8Pa73AvrJbUARp5nFfW1s1BsCgTKA2ndLI+eJ0U/G+d\nR+g4eCAXS6UX2N/rcr8anJ7vvsH5lqyqL5nb/Q2tAoGAIRDtv+cx99RUmrxbJcBI\nnlcoOymV+1DrM98bXQB4OUHROB9Z3KPyjHyRWyQ2RAHO+ccALqjp3Uk9S+SzsikR\nVzATmU6slJeVVzvQQpKddMyvVCQ3WeANMlLLFDodIMxqqN21x6W7pZ4Yh+e0tXlo\n/HfNyuxJ4e+WZRFZtleOwfg=\n}"
        );     
        $client->setAssertionCredentials($cred);
        if($client->getAuth()->isAccessTokenExpired()) {
            $client->getAuth()->refreshTokenWithAssertion($cred);
        }
        $optParams = [
            'dimensions' => 'ga:date',
            'sort'=>'-ga:date'
        ] ;       
        $results = $analytics->data_ga->get(
           'ga:{161227950}',
           $date_from,
           $date_to,
           'ga:sessions,ga:users,ga:pageviews,ga:bounceRate,ga:hits,ga:avgSessionDuration',
           $optParams
           );
            
            $rows = $results->getRows();
            $rows_re_align = [] ;
            foreach($rows as $key=>$row) {
                foreach($row as $k=>$d) {
                    $rows_re_align[$k][$key] = $d ;
                }
            }           
            $optParams = array(
                        'dimensions' => 'rt:medium'
                );
            try {
              $results1 = $analytics->data_realtime->get(
                  'ga:{161227950}',
                  'rt:activeUsers',
                  $optParams);
              // Success. 
            } catch (apiServiceException $e) {
              // Handle API service exceptions.
              $error = $e->getMessage();
            }
            $active_users = $results1->totalsForAllResults ;
            return [
                'data'=> $rows_re_align ,
                'summary'=>$results->getTotalsForAllResults(),
                'active_users'=>$active_users['rt:activeUsers']
                ] ;
    }
}
