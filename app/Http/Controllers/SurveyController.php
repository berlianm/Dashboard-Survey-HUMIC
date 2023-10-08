<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Quiz;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SurveyController extends Controller{
    public function index(Request $request){
          if($request->email !=null){
               $email = $request->email;
               session(['email' => $email]);

               if ($email === 'admin@gmail.com') {
                    return redirect()->route('survey.chartAdmin');
               } else {
                    return view('role', compact('email'));
               }
          }else{
               return back()->with('error', 'Harap masukkan data anda kembali!.');
          }
    }

    public function roleDosen(){
          $role = "DOSEN";

          $email = session('email');

          $countQuiz =  Quiz::all()->where('role', $role)->count();
          $quiz = Quiz::all()->where('role', $role)->toArray();
          $exam = DB::table('exam')->select('*')->where('email', $email);
          return view('layout.header',compact('email')).view('quizrev',compact('role','exam','quiz','countQuiz')).view('layout.footer');
    }

    public function roleMahasiswa(){
          $role = "MAHASISWA";

          $email = session('email');

          $countQuiz =  Quiz::all()->where('role', $role)->count();
          $quiz = Quiz::all()->where('role', $role)->toArray();
          $exam = DB::table('exam')->select('*')->where('email', $email);
          return view('layout.header',compact('email')).view('quizrev',compact('role','exam','quiz','countQuiz')).view('layout.footer');
    }
    public function roleTamu(){
          
          $role = "TAMU";

          $email = session('email');

          $countQuiz =  Quiz::all()->where('role', $role)->count();
          $quiz = Quiz::all()->where('role', $role)->toArray();
          $exam = DB::table('exam')->select('*')->where('email', $email);
          return view('layout.header',compact('email')).view('quizrev',compact('role','exam','quiz','countQuiz')).view('layout.footer');
    }

    public function indexrev(Request $request){
          if($request->email !=null ){
               $email = $request->email;

               $countQuiz =  Quiz::all()->count();
               $quiz = Quiz::all()->where('role', 'DOSEN')->toArray();
               $exam = DB::table('exam')->select('*')->where('email', $email);
               return view('layout.header',compact('email')).view('quizrev',compact('email','exam','quiz','countQuiz')).view('layout.footer');
          }else{
               return back()->with('error', 'Harap masukkan data anda kembali!.');
          }

    }

     public function roleAdmin(){
          $email = session('email');
          if($email == "admin@gmail.com"){
               $countQuiz =  Quiz::all()->count();
               $sangat_baik = 0;
               $baik     = 0;
               $cukup    = 0;
               $buruk    = 0;
               $sangat_buruk = 0;
               $exam = DB::table('exam')->select('*')->get();
               $charts = [];
               $quizId =[];
               $answer =[];
               foreach ($exam as $ex) {
                    $quizId[]= ($ex->quizId)?$ex->quizId:'';
                    $answer[]= ($ex->answer)?$ex->answer:'';
                    if($ex->answer==5){$sangat_baik++;}
                    if($ex->answer==4){$baik++;}
                    if($ex->answer==3){$cukup++;}
                    if($ex->answer==2){$buruk++;}
                    if($ex->answer==1){$sangat_buruk++;}

               }
               $persen =[
                    'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
                    'baik'         => ($baik / $countQuiz) *100,
                    'cukup'        => ($cukup / $countQuiz) *100,
                    'buruk'        => ($buruk / $countQuiz) *100,
                    'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
               ];
               return view('layout.header',compact('email')).view('chart',compact('quizId','answer','countQuiz','persen')).view('layout.footer');
          }else{
               return back()->with('error', 'Anda Bukan Admin, silahkan pilih role lain');
          }
    }

     public function chartrev(Request $request){

          if(($request->iCheck !=null)&&($request->role !=null)){
               $email = session('email');

               $role = $request->role;
               $iCheck  = $request->iCheck;
               foreach($iCheck as $quizId =>$answer){
                    /*echo $quizId;
                    echo $answer;
                    echo '<br>';*/
                    Exam::updateOrCreate(
                         ['quizId' => $quizId, 'email' => $email, 'role' => $role],
                         ['answer' => $answer]
                    );
               }
          }
          //dd($request->iCheck[2]);

          $countQuiz =  Quiz::all()->where('role', $role)->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          $exam = DB::table('exam')->select('*')->where('email', $email)->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($exam as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }
          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chart',compact('email','quizId','answer','countQuiz','persen')).view('layout.footer');
    }

    public function chartAdmin(Request $request){
          $email = session('email');

          $allData = Exam::all();

          $countQuiz =  Quiz::all()->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          $exam = DB::table('exam')->select('*')->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($exam as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }

          $chartNumber =[];

          for ($i = 1; $i <= $countQuiz; $i++) {
                         if (in_array($i, $quizId)) {
                         $chartNumber[$i]=$i;
                         }
                    }
          $totalElements = count($chartNumber);

          foreach ($quizId as $i) {
               $tempA = 0;
               $tempB = 0;
               
               foreach ($allData as $ex) {
                    if ($ex->quizId == $i) {
                         $tempA += $ex->answer;
                         $tempB++;
                    }
               }
          
               $average = ($tempB > 0) ? number_format(($tempA / $tempB), 2) : 0;
               $charts[$i] = $average;
          }
          
          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chartadmin',compact('email','quizId','answer','countQuiz','persen','chartNumber', 'charts')).view('layout.footer');
     
     }

    public function chartAdminDosen(Request $request){
          $email = session('email');

          $dosenData = Exam::where('role', 'DOSEN')->get();

          $countQuiz =  Quiz::all()->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          //$exam = DB::table('exam')->select('*')->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($dosenData as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }

          $chartNumber =[];

          for ($i = 1; $i <= $countQuiz; $i++) {
                         if (in_array($i, $quizId)) {
                         $chartNumber[$i]=$i;
                         }
                    }
          $totalElements = count($chartNumber);

          foreach ($quizId as $i) {
               $tempA = 0;
               $tempB = 0;
               
               foreach ($dosenData as $ex) {
                    if ($ex->quizId == $i) {
                         $tempA += $ex->answer;
                         $tempB++;
                    }
               }
          
               $average = ($tempB > 0) ? number_format(($tempA / $tempB), 2) : 0;
               $charts[$i] = $average;
          }

          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chartadmin',compact('email','quizId','answer','countQuiz','persen','chartNumber', 'charts')).view('layout.footer');
     }

     public function chartAdminMahasiswa(Request $request){
          $email = session('email');

          $mahasiswaData = Exam::where('role', 'MAHASISWA')->get();

          $countQuiz =  Quiz::all()->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          //$exam = DB::table('exam')->select('*')->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($mahasiswaData as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }
          $chartNumber =[];

          for ($i = 1; $i <= $countQuiz; $i++) {
                         if (in_array($i, $quizId)) {
                         $chartNumber[$i]=$i;
                         }
                    }
          $totalElements = count($chartNumber);

          foreach ($quizId as $i) {
               $tempA = 0;
               $tempB = 0;
               
               foreach ($mahasiswaData as $ex) {
                    if ($ex->quizId == $i) {
                         $tempA += $ex->answer;
                         $tempB++;
                    }
               }
          
               $average = ($tempB > 0) ? number_format(($tempA / $tempB), 2) : 0;
               $charts[$i] = $average;
          }
          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chartadmin',compact('email','quizId','answer','countQuiz','persen','chartNumber', 'charts')).view('layout.footer');
     }

     public function chartAdminTamu(Request $request){
          $email = session('email');

          $tamuData = Exam::where('role', 'TAMU')->get();

          $countQuiz =  Quiz::all()->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          //$exam = DB::table('exam')->select('*')->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($tamuData as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }

          $chartNumber =[];

          for ($i = 1; $i <= $countQuiz; $i++) {
                         if (in_array($i, $quizId)) {
                         $chartNumber[$i]=$i;
                         }
                    }
          $totalElements = count($chartNumber);

          foreach ($quizId as $i) {
               $tempA = 0;
               $tempB = 0;
               
               foreach ($tamuData as $ex) {
                    if ($ex->quizId == $i) {
                         $tempA += $ex->answer;
                         $tempB++;
                    }
               }
          
               $average = ($tempB > 0) ? number_format(($tempA / $tempB), 2) : 0;
               $charts[$i] = $average;
          }

          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chartadmin',compact('email','quizId','answer','countQuiz','persen','chartNumber', 'charts')).view('layout.footer');
     }

     public function chartNew(Request $request){

          // if(($request->iCheck !=null)&&($request->role !=null)){
          //      $email = session('email');

          //      $role = $request->role;
          //      $iCheck  = $request->iCheck;
          //      foreach($iCheck as $quizId =>$answer){
          //           /*echo $quizId;
          //           echo $answer;
          //           echo '<br>';*/
          //           Exam::updateOrCreate(
          //                ['quizId' => $quizId, 'email' => $email, 'role' => $role],
          //                ['answer' => $answer]
          //           );
          //      }
          // }
          //dd($request->iCheck[2]);

          $email = session('email');

          $allData = Exam::all();

          $countQuiz =  Quiz::all()->count();
          $sangat_baik = 0;
          $baik     = 0;
          $cukup    = 0;
          $buruk    = 0;
          $sangat_buruk = 0;
          $tanggal_awal = $request->tanggal_awal;
          $tanggal_akhir = $request->tanggal_akhir;
          $exam = DB::table('exam')
           ->select('*')
           ->whereBetween('created_at', [$tanggal_awal, $tanggal_akhir])
           ->get();
          $charts = [];
          $quizId =[];
          $answer =[];
          foreach ($exam as $ex) {
               $quizId[]= ($ex->quizId)?$ex->quizId:'';
               $answer[]= ($ex->answer)?$ex->answer:'';
               if($ex->answer==5){$sangat_baik++;}
               if($ex->answer==4){$baik++;}
               if($ex->answer==3){$cukup++;}
               if($ex->answer==2){$buruk++;}
               if($ex->answer==1){$sangat_buruk++;}

          }

          $chartNumber =[];

          for ($i = 1; $i <= $countQuiz; $i++) {
                         if (in_array($i, $quizId)) {
                         $chartNumber[$i]=$i;
                         }
                    }
          $totalElements = count($chartNumber);

          foreach ($quizId as $i) {
               $tempA = 0;
               $tempB = 0;
               
               foreach ($exam as $ex) {
                    if ($ex->quizId == $i) {
                         $tempA += $ex->answer;
                         $tempB++;
                    }
               }
          
               $average = ($tempB > 0) ? number_format(($tempA / $tempB), 2) : 0;
               $charts[$i] = $average;
          }

          $persen =[
               'sangat_baik'  => ($sangat_baik / $countQuiz) *100,
               'baik'         => ($baik / $countQuiz) *100,
               'cukup'        => ($cukup / $countQuiz) *100,
               'buruk'        => ($buruk / $countQuiz) *100,
               'sangat_buruk' => ($sangat_buruk / $countQuiz) *100
          ];
          return view('layout.header',compact('email')).view('chartadmin',compact('email','quizId','answer','countQuiz','persen','chartNumber', 'charts')).view('layout.footer');
    }

     public function quiz(Request $request){
          $email = ($request->email !=null)? $request->email:'';
          $id  = ($request->id !=null)? $request->id:'';
          $quiz = DB::table('quiz')->select('*')->where('id',$id)->first();
          $exam = DB::table('exam')->select('*')->where('quizId',$id)->where('email',$email)->get()->toArray();
          echo json_encode(['quiz'=>$quiz,'exam'=>$exam]) ;
    }
     public function answer(Request $request){
          $email = ($request->email !=null)? $request->email:'';
          $id  = ($request->id !=null)? $request->id:'';
          Exam::updateOrCreate(
               ['quizId' => $request->id, 'email' => $email],
               ['answer' => $request->answer]
          );

          echo 1;
    }

}
