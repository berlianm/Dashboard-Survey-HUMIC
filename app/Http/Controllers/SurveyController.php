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
              
               $countQuiz =  Quiz::all()->count();
               $quiz = Quiz::all()->toArray();
               $exam = DB::table('exam')->select('*')->where('email', $email); 
              
               return view('layout.header',compact('email')).view('quiz',compact('email','exam','quiz','countQuiz')).view('layout.footer');       
          }else{
               return back()->with('error', 'Harap masukkan data anda kembali!.');
          }
          
    }  
    public function indexrev(Request $request){     
          if($request->email !=null){              
               $email = $request->email;
              
               $countQuiz =  Quiz::all()->count();
               $quiz = Quiz::all()->toArray();
               $exam = DB::table('exam')->select('*')->where('email', $email);               
               return view('layout.header',compact('email')).view('quizrev',compact('email','exam','quiz','countQuiz')).view('layout.footer');       
          }else{
               return back()->with('error', 'Harap masukkan data anda kembali!.');
          }
          
    }  

     public function chart($email=null){      
              
          $countQuiz =  Quiz::all()->count();
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
     public function chartrev(Request $request){   
        
          if(($request->iCheck !=null)&&($request->email !=null)){
               $email = $request->email;
               $iCheck  = $request->iCheck;   
               foreach($iCheck as $quizId =>$answer){
                    /*echo $quizId;
                    echo $answer;
                    echo '<br>';*/
                    Exam::updateOrCreate(
                         ['quizId' => $quizId, 'email' => $email],
                         ['answer' => $answer]
                    );    
               }
          }  
          //dd($request->iCheck[2]);
              
          $countQuiz =  Quiz::all()->count();
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
