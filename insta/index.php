<?php
$url="https://www.instagram.com/my.oras/channel/?__a=1";

        // create curl resource
        $ch = curl_init();

        // set url
        curl_setopt($ch, CURLOPT_URL, $url);

        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // $output contains the output string
        $output = curl_exec($ch);
 print_r($output);die();
        // close curl resource to free up system resources
        curl_close($ch);     


  $result = json_decode($head);