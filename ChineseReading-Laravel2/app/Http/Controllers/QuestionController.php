<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller{
    public function getQuestions()
    {
        $user_id = Auth::user()->id;
        $answer = Auth::user()->answer;
        if($answer==null)
        {
            //this code generate random order of question for each user.
            $A1 = range(1,20);
            $A2 = range(21,21);
            $A3 = range(22,31);
            $A4 = range(32,32);
            $A5 = range(33,42);
            $A6 = range(43,43);
            $A7 = range(44,53);
            $A8 = range(54,54);
            shuffle($A1);
            shuffle($A2);
            shuffle($A3);
            shuffle($A4);
            shuffle($A5);
            shuffle($A6);
            shuffle($A7);
            shuffle($A8);

            $numbers = array_merge($A1,$A2);
            $numbers = array_merge($numbers,$A3);
            $numbers = array_merge($numbers,$A4);
            $numbers = array_merge($numbers,$A5);
            $numbers = array_merge($numbers,$A6);
            $numbers = array_merge($numbers,$A7);
            $numbers = array_merge($numbers,$A8);

            $question_order = '';
            $i = 1;
            $len = count($numbers);
            foreach ($numbers as $number) {
                if($i!=$len){
                    $question_order .= $number . ' ';
                }else{
                    $question_order .= $number;
                }
                $i++;
            }
            $new_answer = new Answer();
            $new_answer->user_id = $user_id;
            $new_answer->question_order = $question_order;
            $new_answer->save();
            $answer = $new_answer;
        }
        if($answer->submitted == 1) return response()->json("You have submitted answer",499);
        else{
            $order_string = $answer->question_order;
            $order_array = explode(" ", $order_string);
            $length = count($order_array);
            $questions = Question::all();
            $reorder_questions = array();
            for($i=0; $i<$length; $i++) {
                $num = $order_array[$i];
                $reorder_questions[$i] = $questions[$num - 1];
            }
            $response = [
                'questions' => $reorder_questions,
                'submitted' => $answer->submitted
            ];
            return response()->json($response, 200);
        }

    }

}