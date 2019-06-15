<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class datatablegen extends Controller
{
    public function getDataTable()
    {
      $url="http://mantra.kalselprov.go.id/diskominfo_kalsel/eabsen/lihatRekapAbsen";
      $accesskey="rsrtxdraz1azgzu6dmcjevclv25123wbaupvabz4gpokwf63ypsffkdf5lytgz3s"; //Kunci akses diperoleh dari permohonan akses requester
      $pardata=array();

      $pardata["q_jumlahbaris"]=urlencode("..."); //tidak digunakan
      $pardata["q_awalbaris"]=urlencode("..."); //tidak digunakan
      $par="?".http_build_query($pardata); //tidak digunakan

      $options=array(
      	'http'=>array(
      		'ignore_errors'=>true,
      		'method'=>"GET",
      		'header'=>implode("\r\n",[
      			"Content-Type:application/x-www-form-urlencoded",
      			"Accept:application/json",
      			"Accept-Charset:UTF-8",
      			"AccessKey:$accesskey"
      		])
      	)
      );
      $context=stream_context_create($options);
      $content=file_get_contents($url.$par,false,$context);
      //var_dump($content);

      $decode_l1 = json_decode($content);
      //dd($decode_l1);
      $datarekap = $decode_l1->response->data->lihatRekapAbsen; //data sudah sebagai array hasil query db
      //print_r(json_encode($datarekap));

      //print as datatables using Yajra
      return datatables()->of($datarekap)->toJson();
    }
}
