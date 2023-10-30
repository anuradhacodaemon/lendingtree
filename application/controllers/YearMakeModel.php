<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class YearMakeModel extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public $authorization_key;
    public function __construct() {
        // Construct the parent class
        parent::__construct();
        $this->authorization_key = base64_encode(YEAR_MAKE_USER .':'. YEAR_MAKE_SECRET);
        
    }
    //

    public function getYear()
    {
        /*ini_set('display_errors', 1); 
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);*/
        $usedCar = 'UsedCarWS/UsedCarWS/';
        $newCar = 'NewCarAPI/NewCarAPI/';
        
        $year = (isset($_POST['year']) && !empty($_POST['year'])) ? $_POST['year'] : "";
        $make = (isset($_POST['make']) && !empty($_POST['make'])) ? $_POST['make'] : "";
        $model = (isset($_POST['model']) && !empty($_POST['model'])) ? $_POST['model'] : "";
        $car = (isset($_POST['from']) && !empty($_POST['from']) && $_POST['from'] == 'vsc') ? $newCar : $usedCar;

        $domain = 'https://service.blackbookcloud.com/'.$car;
        $part   = 'Drilldown/ALL/'. $year. '?make='. $make;
        $headers[] = 'Authorization:Basic '. $this->authorization_key;
        if(!empty($year))
        {
            $url = $domain.$part;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => $headers,
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $json = json_decode($response, true);
            if(isset($json['error_count']) && $json['error_count'] > 0)
            {
                $error_list['description'] = json_encode($json['message_list'][0]['description']); 
                echo $response = json_encode($error_list);exit;
            }
            else{
                    if(isset($json['drilldown']) && !empty($year) && empty($make) && empty($model))
                    {
                        $class_list = $json['drilldown']['class_list'][0]['year_list'][0]['make_list'];
                        $resp = $this->getMakeSeqance($class_list);
                        if(!empty($resp))
                        {
                            echo $response = json_encode($resp);exit;
                        }
                        
                    }
                    if(isset($json['drilldown']) && !empty($year) && !empty($make) && empty($model))
                    {
                        $model_list = $json['drilldown']['class_list'][0]['year_list'][0]['make_list'][0]['model_list'];
                            $res = $this->getMakeModelSequance($model_list);
                            if(!empty($res))
                            {
                                $rep = $this->optionsOfModels($res);
                                echo $response = json_encode($rep);exit;
                            }
                    }
                    if(isset($json['message']))
                    {
                        echo $response = json_encode($json);exit;
                    }
                    
                }
            
            //echo $response = json_encode($json);
            //echo $response;
        }
        else{
                return false;
            }
    }

    //Make Brand Array
    function getMakeSeqance($arr)
    {
        $data = '';
        //$brands=[];
        if(!empty($arr))
        {
            $data .= '<option value="">Select Make/Brand</option>';
            foreach($arr as $make)
            {
                //$brands[] = $make['name'];
                if(isset($this->session->userdata['vehicle_make_brand']) && $this->session->userdata['vehicle_make_brand'] == $make['name'])
                {
                    $data .= '<option value="' . $make['name'] . '" selected="selected">' . $make['name'] . '</option>';
                }
                else{
                    $data .= '<option value="' . $make['name'] . '">' . $make['name'] . '</option>';
                }
                
            }
            return $data;
        }
        return $data;
    }
    //Make Model Seqance
    function getMakeModelSequance($arr)
    {
        $model = [];
        if(!empty($arr))
        {
            foreach($arr as $mk => $model_val)
            {
                if(count($model_val['series_list']) > 0)
                {
                    $main_model = (!empty($model_val['name'])) ? $model_val['name']: 'model_name';
                    foreach($model_val['series_list'] as $style)
                    {
                        $mainstyle = (!empty($style['name'])) ? $style['name'] : 'style_name';
                        if(count($style['style_list']) > 0)
                        {
                            foreach($style['style_list'] as $edition)
                            {
                                $main_edi = $edition['name'];
                                $model[$main_model][$mainstyle][$main_edi] = $edition['uvc'];
                            }
                        }
                        
                    }
                }
            }
            return $model;
        }
        return $model;
    }
    //
    function optionsOfModels($arr)
    {
        $data = '';
        if(!empty($arr))
        {
            $data .= '<option value="">Select Model</option>';
            foreach($arr as $k => $val)
            {                   
                foreach($val as $s => $v)
                {       
                    foreach($v as $e => $edition)
                    {
                        $values= ['model' => $k, 'style' => $s, 'edition' => $e, 'uvc' => $edition];
                        $str = implode(',', $values);
                        if(isset($this->session->userdata['vehicle_model']) && $this->session->userdata['vehicle_mvehicle_modelake_brand'] == $str)
                        {
                            $data .= '<option value="' . $str . '" selected="selected">' . $k.' ' .$s. ' ' .$e. ' ' .$edition . '</option>';
                        }
                        else{
                                $data .= '<option value="' . $str . '"> ' . $k.' ' .$s. ' ' .$e. ' ' .$edition . '</option>';
                            }

                    }
                }
                
            }
            return $data;
        }
        return $data;
    }








    //=======================================END OF FILE==============================================================
}