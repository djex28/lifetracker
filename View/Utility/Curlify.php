<?php

class Curlify {
    
    public static $url = "localhost";
    public static $data;
    
    public function __construct($data) {
        $encodedData = array();
        foreach ($data as $key => $value) {
            $encodedData[$key] = urlencode($value);
        }
        $this->data = $encodedData;
    }
    
    public static function encode($data) {
        $encodedData = array();
        foreach ($data as $key => $value) {
            if (gettype($value) == "string") {
                $encodedData[$key] = urlencode($value);
            } else {
                $encodedData[$key] = $value;
            }
        }
        return $encodedData;
    }
    
    public static function send($url, $data, $isModule=false) {      
        extract($_POST);
        
        if ($isModule) {
            $url = self::$url."/Module/Modules/".$data['name']."/Views/". $url;
        } else {
            $url = self::$url."/View/Templates/". $url;
        }
        
        $encodedData = self::encode($data);
        
        //url-ify the data for the POST
        $field_string = http_build_query($encodedData);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, count($encodedData));
        curl_setopt($ch,CURLOPT_POSTFIELDS, $field_string);

        //execute post
        $result = curl_exec($ch);
        //echo $result;

        //close connection
        curl_close($ch);
    }
}

