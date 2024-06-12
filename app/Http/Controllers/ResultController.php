<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CalculationController;
use App\Models\Alternative;
use Illuminate\Support\Collection;
use Illuminate\Support\Arr;
use App\Models\Criteria;

class ResultController extends Controller
{
    public function index(){
        $calculatioObj = new CalculationsController;
        $alternatives = Alternative::where('user_id', '=', auth()->user()->id)->get();
        $criteria = Criteria::where('user_id', '=', auth()->user()->id)->get();
        if(count($criteria) == 0 || count($alternatives) == 0){
            return view('modal.calculationModal.noCalculationModal');
        }
        $decisionMatrix = $calculatioObj->getDecisionMatrix($alternatives);
        $normMatrix = $calculatioObj->norm($decisionMatrix);
        $weightedNorm = $calculatioObj->getWeightedNorm($normMatrix, $criteria);
        $idealPositive = $calculatioObj->getIdealPositive($weightedNorm, $criteria);
        $idealNegative = $calculatioObj->getIdealNegative($weightedNorm, $criteria);
        $solutionPositive = $calculatioObj->getSolutionPositive($weightedNorm, $idealPositive);
        $solutionNegative = $calculatioObj->getSolutionNegative($weightedNorm, $idealNegative);
        $PreferenceValue = $calculatioObj->getPreferenceValue($solutionPositive, $solutionNegative);
        $pairedValues = $this->pairingValues($PreferenceValue, $alternatives);
        $sortedResults = $this->getSortedResult($pairedValues, 'grade', 0);
        return view('result', compact('sortedResults'));
    }

    public function pairingValues($PreferenceValue, $alternatives){
        $result = [];
        for ($i=0; $i < count($alternatives); $i++) { 
            array_push($result, (object)[
                'id' => $alternatives[$i]->id,
                'code' => 'A'.$i+1,
                'name' => $alternatives[$i]->name,
                'grade' => $PreferenceValue[$i],
            ]);
        }

        // dd($result);
        return $result;
    }

    public function getSortedResult($pairedValues, $sortBy, Bool $asc){
        if($asc){
            $sortedResult = collect($pairedValues)->sortBy($sortBy);
        }else{
            $sortedResult = collect($pairedValues)->sortByDesc('grade');
        }

        // reset collection index
        $sortedResult =  $sortedResult->values();

        // Give Rank
        for ($i=0; $i < count($sortedResult); $i++) { 
            $sortedResult[$i]->rank = $i + 1;
        }

        // dd($sortedResult);
        return collect($sortedResult);
    }
}
