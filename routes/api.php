<?php

use App\Http\Controllers\ProficienciesApi;
use App\Http\Controllers\RealizationsApi;
use App\Http\Controllers\SkillsApi;
use App\Http\Controllers\SocialLinksApi;
use App\Http\Controllers\TechnologiesApi;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('proficiencies')->group(function () {
        Route::get('/', [ProficienciesApi::class, 'all']);
        Route::get('{id}', [ProficienciesApi::class, 'byId'])->where('id', '[0-9]+');
        Route::prefix('translated')->group(function () {
            Route::get('/', [ProficienciesApi::class, 'allTranslated']);
            Route::get('{id}', [ProficienciesApi::class, 'translated'])->where('id', '[0-9]+');
        });
    });

    Route::prefix('skills')->group(function () {
        Route::get('/', [SkillsApi::class, 'all']);
        Route::get('{id}', [SkillsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('/ordered', [SkillsApi::class, 'ordered']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [SkillsApi::class, 'allTranslated']);
            Route::get('{id}', [SkillsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('/ordered', [SkillsApi::class, 'orderedTranslated']);
        });
    });

    Route::prefix('technologies')->group(function () {
        Route::get('/', [TechnologiesApi::class, 'all']);
        Route::get('{id}', [TechnologiesApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('/ordered', [TechnologiesApi::class, 'ordered']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [TechnologiesApi::class, 'allTranslated']);
            Route::get('{id}', [TechnologiesApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('/ordered', [TechnologiesApi::class, 'orderedTranslated']);
        });
    });

    Route::prefix('social-links')->group(function () {
        Route::get('/', [SocialLinksApi::class, 'all']);
        Route::get('{id}', [SocialLinksApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('/ordered', [SocialLinksApi::class, 'ordered']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [SocialLinksApi::class, 'allTranslated']);
            Route::get('{id}', [SocialLinksApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('/ordered', [SocialLinksApi::class, 'orderedTranslated']);
        });
    });

    Route::prefix('realization')->group(function () {
        Route::get('/', [RealizationsApi::class, 'all']);
        Route::get('{id}', [RealizationsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('/ordered', [RealizationsApi::class, 'ordered']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [RealizationsApi::class, 'allTranslated']);
            Route::get('{id}', [RealizationsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('/ordered', [RealizationsApi::class, 'orderedTranslated']);
        });
    });

});
