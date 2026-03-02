<?php

use App\Http\Controllers\CertificationsApi;
use App\Http\Controllers\EducationApi;
use App\Http\Controllers\JobsApi;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProficienciesApi;
use App\Http\Controllers\ProjectsApi;
use App\Http\Controllers\RealizationsApi;
use App\Http\Controllers\SkillsApi;
use App\Http\Controllers\SocialLinksApi;
use App\Http\Controllers\TechnologiesApi;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('proficiencies')->group(function () {
        Route::get('/', [ProficienciesApi::class, 'all']);
        Route::get('paginated', [ProficienciesApi::class, 'paginated']);
        Route::get('{id}', [ProficienciesApi::class, 'byId'])->where('id', '[0-9]+');
        Route::prefix('translated')->group(function () {
            Route::get('/', [ProficienciesApi::class, 'allTranslated']);
            Route::get('paginated', [ProficienciesApi::class, 'paginatedTranslated']);
            Route::get('{id}', [ProficienciesApi::class, 'translated'])->where('id', '[0-9]+');
        });
    });

    Route::prefix('skills')->group(function () {
        Route::get('/', [SkillsApi::class, 'all']);
        Route::get('paginated', [SkillsApi::class, 'paginated']);
        Route::get('{id}', [SkillsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::prefix('translated')->group(function () {
            Route::get('/', [SkillsApi::class, 'allTranslated']);
            Route::get('paginated', [SkillsApi::class, 'paginatedTranslated']);
            Route::get('{id}', [SkillsApi::class, 'translated'])->where('id', '[0-9]+');
        });
    });

    Route::prefix('technologies')->group(function () {
        Route::get('/', [TechnologiesApi::class, 'all']);
        Route::get('paginated', [TechnologiesApi::class, 'paginated']);
        Route::get('{id}', [TechnologiesApi::class, 'byId'])->where('id', '[0-9]+');
        Route::prefix('translated')->group(function () {
            Route::get('/', [TechnologiesApi::class, 'allTranslated']);
            Route::get('paginated', [TechnologiesApi::class, 'paginatedTranslated']);
            Route::get('{id}', [TechnologiesApi::class, 'translated'])->where('id', '[0-9]+');
        });
    });

    Route::prefix('social-links')->group(function () {
        Route::get('/', [SocialLinksApi::class, 'all']);
        Route::get('paginated', [SocialLinksApi::class, 'paginated']);
        Route::get('{id}', [SocialLinksApi::class, 'byId'])->where('id', '[0-9]+');
        Route::prefix('translated')->group(function () {
            Route::get('/', [SocialLinksApi::class, 'allTranslated']);
            Route::get('paginated', [SocialLinksApi::class, 'paginatedTranslated']);
            Route::get('{id}', [SocialLinksApi::class, 'translated'])->where('id', '[0-9]+');
        });
    });

    Route::prefix('realizations')->group(function () {
        Route::get('/', [RealizationsApi::class, 'all']);
        Route::get('paginated', [RealizationsApi::class, 'paginated']);
        Route::get('{id}', [RealizationsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('home-page', [ProjectsApi::class, 'home']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [RealizationsApi::class, 'allTranslated']);
            Route::get('paginated', [RealizationsApi::class, 'paginatedTranslated']);
            Route::get('{id}', [RealizationsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('home-page', [RealizationsApi::class, 'homeTranslated']);
        });
    });

    Route::prefix('projects')->group(function () {
        Route::get('/', [ProjectsApi::class, 'all']);
        Route::get('paginated', [ProjectsApi::class, 'paginated']);
        Route::get('{id}', [ProjectsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('home-page', [ProjectsApi::class, 'home']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [ProjectsApi::class, 'allTranslated']);
            Route::get('paginated', [ProjectsApi::class, 'paginatedTranslated']);
            Route::get('{id}', [ProjectsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('home-page', [ProjectsApi::class, 'homeTranslated']);
        });
    });

    Route::prefix('jobs')->group(function () {
        Route::get('/', [JobsApi::class, 'all']);
        Route::get('paginated', [JobsApi::class, 'paginated']);
        Route::get('{id}', [JobsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('home-page', [JobsApi::class, 'home']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [JobsApi::class, 'allTranslated']);
            Route::get('paginated', [JobsApi::class, 'paginatedTranslated']);
            Route::get('{id}', [JobsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('home-page', [JobsApi::class, 'homeTranslated']);
        });
    });

    Route::prefix('education')->group(function () {
        Route::get('/', [EducationApi::class, 'all']);
        Route::get('paginated', [EducationApi::class, 'paginated']);
        Route::get('{id}', [EducationApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('home-page', [EducationApi::class, 'home']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [EducationApi::class, 'allTranslated']);
            Route::get('paginated', [EducationApi::class, 'paginatedTranslated']);
            Route::get('{id}', [EducationApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('home-page', [EducationApi::class, 'homeTranslated']);
        });
    });

    Route::prefix('certifications')->group(function () {
        Route::get('/', [CertificationsApi::class, 'all']);
        Route::get('paginated', [CertificationsApi::class, 'paginated']);
        Route::get('{id}', [CertificationsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('home-page', [CertificationsApi::class, 'home']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [CertificationsApi::class, 'allTranslated']);
            Route::get('paginated', [CertificationsApi::class, 'paginatedTranslated']);
            Route::get('{id}', [CertificationsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('home-page', [CertificationsApi::class, 'homeTranslated']);
        });
    });

    Route::post('/send-email', [MailController::class, 'sendContactForm']);
});
