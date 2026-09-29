<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Router;
use App\Controllers\AuthController;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);

Router::get('/forms', [PublicController::class, 'forms']);
Router::post('/forms', [PublicController::class, 'answer']);


Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/create', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);
Router::get('/admin/articles/view', [ArticlesController::class, 'view']);

Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/logout', [AuthController::class, 'logout']);