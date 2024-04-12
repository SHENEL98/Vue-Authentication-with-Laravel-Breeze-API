<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return response()->json("Skill Index");
    }
    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json("Skill Created");
    }
}