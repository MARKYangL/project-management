<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

// 测试路由，验证 API 是否正常工作
Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});

// 项目相关的 RESTful API 路由
Route::apiResource('projects', ProjectController::class);

// 任务相关的 RESTful API 路由（嵌套在项目中）
Route::apiResource('projects.tasks', TaskController::class)->shallow();
