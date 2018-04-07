<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller{
    public function getAnswer()
    {
        $answer = Auth::user()->answer;
        if($answer==null) return response()->json("error",400);
        if($answer->submitted == 1) return response()->json("You have submitted answer",499);
        $ans_array = [
            $answer->ans1,
            $answer->ans2,
            $answer->ans3,
            $answer->ans4,
            $answer->ans5,
            $answer->ans6,
            $answer->ans7,
            $answer->ans8,
            $answer->ans9,
            $answer->ans10,
            $answer->ans11,
            $answer->ans12,
            $answer->ans13,
            $answer->ans14,
            $answer->ans15,
            $answer->ans16,
            $answer->ans17,
            $answer->ans18,
            $answer->ans19,
            $answer->ans20,
            $answer->ans21,
            $answer->ans22,
            $answer->ans23,
            $answer->ans24,
            $answer->ans25,
            $answer->ans26,
            $answer->ans27,
            $answer->ans28,
            $answer->ans29,
            $answer->ans30,
            $answer->ans31,
            $answer->ans32,
            $answer->ans33,
            $answer->ans34,
            $answer->ans35,
            $answer->ans36,
            $answer->ans37,
            $answer->ans38,
            $answer->ans39,
            $answer->ans40,
            $answer->ans41,
            $answer->ans42,
            $answer->ans43,
            $answer->ans44,
            $answer->ans45,
            $answer->ans46,
            $answer->ans47,
            $answer->ans48,
            $answer->ans49,
            $answer->ans50,
            $answer->ans51,
            $answer->ans52,
            $answer->ans53,
            $answer->ans54,
        ];
        $length = count($ans_array);
        $re_ans = array($length);
        $order_string = $answer->question_order;
        $order_array = explode(" ", $order_string);
        for($i=0; $i<$length; $i++) {
            $num = $order_array[$i];
            $re_ans[$i] = $ans_array[$num-1];
        }
        $essay = null;
        if($answer->essay == 0) $essay = false;
        else $essay=true;
        $response = [
            'answers' => $re_ans,
            'essay' => $essay
        ];
        return response()->json($response, 200);
    }
    public function postAnswer(Request $request)
    {

        $answer = Auth::user()->answer;
        if($answer==null) return response()->json("answer is null",400);
        if($answer->submitted == 1) return response()->json("You have submitted answer",499);

        $order_string = $answer->question_order;
        $order_array = explode(" ", $order_string);

        $ans = $request->input('answers');
        $length = count($ans);
        $re_ans = array($length);

        for($i=0; $i<$length; $i++) {
            $num = $order_array[$i];
            $re_ans[$num-1] = $ans[$i];
        }
        $answer->submitted = $request->input('submitted');
        if($request->input('essay') == true) $answer->essay = 1;
        else $answer->essay = 0;
        $answer->ans1 = $re_ans[0];
        $answer->ans2 = $re_ans[1];
        $answer->ans3 = $re_ans[2];
        $answer->ans4 = $re_ans[3];
        $answer->ans5 = $re_ans[4];
        $answer->ans6 = $re_ans[5];
        $answer->ans7 = $re_ans[6];
        $answer->ans8 = $re_ans[7];
        $answer->ans9 = $re_ans[8];
        $answer->ans10 = $re_ans[9];
        $answer->ans11 = $re_ans[10];
        $answer->ans12 = $re_ans[11];
        $answer->ans13 = $re_ans[12];
        $answer->ans14 = $re_ans[13];
        $answer->ans15 = $re_ans[14];
        $answer->ans16 = $re_ans[15];
        $answer->ans17 = $re_ans[16];
        $answer->ans18 = $re_ans[17];
        $answer->ans19 = $re_ans[18];
        $answer->ans20 = $re_ans[19];
        $answer->ans21 = $re_ans[20];
        $answer->ans22 = $re_ans[21];
        $answer->ans23 = $re_ans[22];
        $answer->ans24 = $re_ans[23];
        $answer->ans25 = $re_ans[24];
        $answer->ans26 = $re_ans[25];
        $answer->ans27 = $re_ans[26];
        $answer->ans28 = $re_ans[27];
        $answer->ans29 = $re_ans[28];
        $answer->ans30 = $re_ans[29];
        $answer->ans31 = $re_ans[30];
        $answer->ans32 = $re_ans[31];
        $answer->ans33 = $re_ans[32];
        $answer->ans34 = $re_ans[33];
        $answer->ans35 = $re_ans[34];
        $answer->ans36 = $re_ans[35];
        $answer->ans37 = $re_ans[36];
        $answer->ans38 = $re_ans[37];
        $answer->ans39 = $re_ans[38];
        $answer->ans40 = $re_ans[39];
        $answer->ans41 = $re_ans[40];
        $answer->ans42 = $re_ans[41];
        $answer->ans43 = $re_ans[42];
        $answer->ans44 = $re_ans[43];
        $answer->ans45 = $re_ans[44];
        $answer->ans46 = $re_ans[45];
        $answer->ans47 = $re_ans[46];
        $answer->ans48 = $re_ans[47];
        $answer->ans49 = $re_ans[48];
        $answer->ans50 = $re_ans[49];
        $answer->ans51 = $re_ans[50];
        $answer->ans52 = $re_ans[51];
        $answer->ans53 = $re_ans[52];
        $answer->ans54 = $re_ans[53];
        $answer->save();
        return response()->json("success submit",200);
    }

}