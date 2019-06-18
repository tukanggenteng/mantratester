<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class proses extends Controller
{
    public function postData(Request $request)
    {
      //dd($request);

      $url="http://mantra.kalselprov.go.id/diskominfo_kalsel/eabsen/tambahRekapAbsen";
      $accesskey="qkdcfkx2p6kr8956uu3zkmn9ruccgceulrjaimdl62uhvwx0wi6262xpv419jz23"; //Kunci akses diperoleh dari permohonan akses requester
      $pardata=array();

      $validator = Validator::make($request->all(), [
            'nip' => 'required|min:18',
        ]);

      if ($validator->fails())
        {
          $response["status"] = 0;
          $response["message"] = "Data Nip Tidak boleh kosong/Kurang dari 18 Digit";
          return redirect()->route('halaman.form')->with('error', $response["message"]);
          //dd($response);
        }
      else
      {
        $pardata["nip"]=$request->nip;

        //$tanggal=explode('-',$request->periode);
        //$tanggal_fix = $tanggal[1]."-".$tanggal[0]."-01";
        //$pardata["periode"]=$tanggal_fix;
        $pardata["periode"]=$request->periode;

        $pardata["hari_kerja"]=$request->harikerja;
        $pardata["hadir"]=$request->hadir;
        $pardata["apel"]=$request->apel;
        $pardata["akumulasi"]=$request->akumulasi_jk;
        $pardata["tanpakabar"]=$request->tanpakabar;
        $pardata["ijin"]=$request->ijin;
        $pardata["ijin_t"]=$request->ijin_t;
        $pardata["ijin_pc"]=$request->ijin_pc;
        $pardata["sakit"]=$request->sakit;
        $pardata["cuti"]=$request->cuti;
        $pardata["tugasluar"]=$request->tugasluar;
        $pardata["tugasbelajar"]=$request->tugasbelajar;
        $pardata["ijin_kl"]=$request->ijin_kl;
        $pardata["terlambat_mk"]=$request->terlambat_mk;
        $pardata["akumulasi_t"]=$request->akumulasi_t;
        $pardata["pulangcepat"]=$request->pulangcepat;
        $par=http_build_query($pardata);

        $options=array(
          'http'=>array(
            'ignore_errors'=>false,
            'method'=>"POST",
            'header'=>implode("\r\n",[
              "Content-Type:application/x-www-form-urlencoded",
              "Accept:application/json",
              "Accept-Charset:UTF-8",
              "AccessKey:$accesskey"
            ]),
            'content'=>$par
          )
        );
        $context=stream_context_create($options);
        $content=file_get_contents($url,false,$context);

        $decode_c= json_decode($content);
        //dd($decode_c);
        $response["status"] = 1;
        $response["message"] = $decode_c->response->message;
        return redirect()->route('halaman.form')->with('success', 'Berhasil Mengirim Data!.');
      }


    }
    
}
