<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\GradeAlternativeCriteria as Grade;
use Illuminate\Support\Collection;

class CalculationsController extends Controller
{
    public function index(){
        $criteria = Criteria::where('user_id', '=', auth()->user()->id)->get();
        $alternatives = Alternative::where('user_id', '=', auth()->user()->id)->get();
        if(count($criteria) == 0 || count($alternatives) == 0){
            return view('modal.calculationModal.noCalculationModal');
        }
        $decisionMatrix = $this->getDecisionMatrix($alternatives);
        $normMatrix = $this->norm($decisionMatrix);
        $weightedNorm = $this->getWeightedNorm($normMatrix, $criteria);
        $idealPositive = $this->getIdealPositive($weightedNorm, $criteria);
        $idealNegative = $this->getIdealNegative($weightedNorm, $criteria);
        $solutionPositive = $this->getSolutionPositive($weightedNorm, $idealPositive);
        $solutionNegative = $this->getSolutionNegative($weightedNorm, $idealNegative);
        $PreferenceValue = $this->getPreferenceValue($solutionPositive, $solutionNegative);

        // dd($decisionMatrix, $normMatrix, $weightedNorm, $idealPositive, $idealNegative, $solutionPositive, $solutionNegative, $PreferenceValue);
        return view('calculation', compact('decisionMatrix', 'normMatrix', 'weightedNorm', 'idealPositive', 'idealNegative', 'solutionPositive', 'solutionNegative', 'PreferenceValue', 'criteria', 'alternatives'));
    }

    public function getDecisionMatrix($alternatives){
        $matrix = [];
        foreach ($alternatives as $key => $alternative) {
           $GradesData = Grade::where('alternative_id', '=', $alternative->id)
           ->orderBy('criteria_id', 'asc')
           ->get();

           $temp = [];
           foreach ($GradesData as $key2 => $Gradedata) {
            array_push($temp, $Gradedata->grade);
           }
           array_push($matrix, $temp);
        }

        // dd($matrix);
        return $matrix;
    }

    public function norm($decisionMatrix){
        $divider = $this->getNormDivider($decisionMatrix);
        $result = [];
        // dd($divider);

        for ($i=0; $i < count($decisionMatrix); $i++) { 
            $temp = [];
            for ($j=0; $j < count($decisionMatrix[$i]); $j++) { 
                if ($divider[$j] != 0) {
                    array_push($temp, $decisionMatrix[$i][$j]/$divider[$j]);
                }else{
                    array_push($temp, 0);
                }
            }
            // dd($decisionMatrix, $divider, $temp);
            array_push($result, $temp);
        }
        // dd($decisionMatrix, $divider, $result);
        return $result;
    }

    public function getNormDivider($decisionMatrix){
        $result = [];
        for ($i=0; $i < count($decisionMatrix[0]); $i++) { 
            $column = array_column($decisionMatrix, $i);
            $temp = 0;
            foreach ($column as $key => $value) {
                $temp = $temp + ($value ** 2);
            }
            array_push($result, sqrt($temp));
        }

        // dd($result);
        return $result;
    }

    public function getWeightedNorm($normMatrix, $criteria){
        $result = [];
        for ($i=0; $i < count($normMatrix); $i++) { 
            $temp = [];
            for ($j=0; $j < count($normMatrix[$i]); $j++) { 
                $weighted = $normMatrix[$i][$j] * $criteria[$j]->weight;
                array_push($temp, $weighted); 
            }
            array_push($result, $temp); 
        }
        // dd($normMatrix, $criteria, $result);
        return $result;
    }

    public function getIdealPositive($weightedNorm, $criteria){
        $result = [];

            for ($j=0; $j < count($weightedNorm[0]); $j++) { 
               if($criteria[$j]->benefited == 1){
                   $data = collect(array_column($weightedNorm, $j))->max();
               }else{
                $data = collect(array_column($weightedNorm, $j))->min();
               }
                array_push($result, $data);
            }
        // dd($criteria, array_column($weightedNorm, 3), $weightedNorm, $result);
        return $result;
    }

    public function getIdealNegative($weightedNorm, $criteria){
        $result = [];

            for ($j=0; $j < count($weightedNorm[0]); $j++) { 
               if($criteria[$j]->benefited == 1){
                $data = collect(array_column($weightedNorm, $j))->min();
               }else{
                $data = collect(array_column($weightedNorm, $j))->max();
               }
                array_push($result, $data);
            }
        // dd($criteria, array_column($weightedNorm, 3), $weightedNorm, $result);
        return $result;
    }

    public function getSolutionPositive($weightedNorm, $idealPositive){
        $result = [];
        for ($i=0; $i < count($weightedNorm); $i++) { 
            $temp = 0;
            for ($j=0; $j < count($idealPositive); $j++) { 
                $temp = $temp + (pow($weightedNorm[$i][$j]-$idealPositive[$j], 2));
            }
            array_push($result, sqrt($temp));
        }
        // dd($weightedNorm, $idealPositive, $result);
        return $result;
    }

    public function getSolutionNegative($weightedNorm, $idealNegative){
        $result = [];
        for ($i=0; $i < count($weightedNorm); $i++) { 
            $temp = 0;
            for ($j=0; $j < count($idealNegative); $j++) { 
                $temp = $temp + (pow(($weightedNorm[$i][$j]-$idealNegative[$j]), 2));
            }
            // if($j == 2){
            // }
            // dd($weightedNorm[$i][$j], $idealNegative[$j]);
            array_push($result, sqrt($temp));
        }
        // dd($weightedNorm, $idealNegative, $result);
        return $result;
    }

    public function getPreferenceValue($solutionPositive, $solutionNegative){
        $result = [];
        for ($i=0; $i < count($solutionPositive); $i++) { 
            $temp = ($solutionNegative[$i]/($solutionPositive[$i]+$solutionNegative[$i]));
            $temp = number_format($temp, 4);
            // dd($temp);
            array_push($result, $temp);
        }

        // dd($solutionPositive, $solutionNegative, $result);
        return $result;
    }


}
