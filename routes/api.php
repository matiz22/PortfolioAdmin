<?php

use App\Http\Controllers\CertificationsApi;
use App\Http\Controllers\EducationApi;
use App\Http\Controllers\JobsApi;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProficienciesApi;
use App\Http\Controllers\ProjectsApi;
use App\Http\Controllers\RealizationsApi;
use App\Http\Controllers\SlugApi;
use App\Http\Controllers\SkillsApi;
use App\Http\Controllers\SocialLinksApi;
use App\Http\Controllers\TechnologiesApi;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('slugs', [SlugApi::class, 'index']);

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
        Route::get('summary', [RealizationsApi::class, 'summary']);
        Route::get('paginated', [RealizationsApi::class, 'paginated']);
        Route::get('summary/paginated', [RealizationsApi::class, 'summaryPaginated']);
        Route::get('{id}', [RealizationsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('slug/{slug}', [RealizationsApi::class, 'bySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('summary/{id}', [RealizationsApi::class, 'summaryById'])->where('id', '[0-9]+');
        Route::get('summary/slug/{slug}', [RealizationsApi::class, 'summaryBySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('home-page', [RealizationsApi::class, 'home']);
        Route::get('home-page/summary', [RealizationsApi::class, 'homeSummary']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [RealizationsApi::class, 'allTranslated']);
            Route::get('summary', [RealizationsApi::class, 'summaryTranslated']);
            Route::get('paginated', [RealizationsApi::class, 'paginatedTranslated']);
            Route::get('summary/paginated', [RealizationsApi::class, 'summaryPaginatedTranslated']);
            Route::get('{id}', [RealizationsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('slug/{slug}', [RealizationsApi::class, 'translatedBySlug'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('summary/{id}', [RealizationsApi::class, 'summaryByIdTranslated'])->where('id', '[0-9]+');
            Route::get('summary/slug/{slug}', [RealizationsApi::class, 'summaryBySlugTranslated'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('home-page', [RealizationsApi::class, 'homeTranslated']);
            Route::get('home-page/summary', [RealizationsApi::class, 'homeSummaryTranslated']);
        });
    });

    Route::prefix('projects')->group(function () {
        Route::get('/', [ProjectsApi::class, 'all']);
        Route::get('summary', [ProjectsApi::class, 'summary']);
        Route::get('paginated', [ProjectsApi::class, 'paginated']);
        Route::get('summary/paginated', [ProjectsApi::class, 'summaryPaginated']);
        Route::get('{id}', [ProjectsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('slug/{slug}', [ProjectsApi::class, 'bySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('summary/{id}', [ProjectsApi::class, 'summaryById'])->where('id', '[0-9]+');
        Route::get('summary/slug/{slug}', [ProjectsApi::class, 'summaryBySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('home-page', [ProjectsApi::class, 'home']);
        Route::get('home-page/summary', [ProjectsApi::class, 'homeSummary']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [ProjectsApi::class, 'allTranslated']);
            Route::get('summary', [ProjectsApi::class, 'summaryTranslated']);
            Route::get('paginated', [ProjectsApi::class, 'paginatedTranslated']);
            Route::get('summary/paginated', [ProjectsApi::class, 'summaryPaginatedTranslated']);
            Route::get('{id}', [ProjectsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('slug/{slug}', [ProjectsApi::class, 'translatedBySlug'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('summary/{id}', [ProjectsApi::class, 'summaryByIdTranslated'])->where('id', '[0-9]+');
            Route::get('summary/slug/{slug}', [ProjectsApi::class, 'summaryBySlugTranslated'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('home-page', [ProjectsApi::class, 'homeTranslated']);
            Route::get('home-page/summary', [ProjectsApi::class, 'homeSummaryTranslated']);
        });
    });

    Route::prefix('jobs')->group(function () {
        Route::get('/', [JobsApi::class, 'all']);
        Route::get('summary', [JobsApi::class, 'summary']);
        Route::get('paginated', [JobsApi::class, 'paginated']);
        Route::get('summary/paginated', [JobsApi::class, 'summaryPaginated']);
        Route::get('{id}', [JobsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('slug/{slug}', [JobsApi::class, 'bySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('summary/{id}', [JobsApi::class, 'summaryById'])->where('id', '[0-9]+');
        Route::get('summary/slug/{slug}', [JobsApi::class, 'summaryBySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('home-page', [JobsApi::class, 'home']);
        Route::get('home-page/summary', [JobsApi::class, 'homeSummary']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [JobsApi::class, 'allTranslated']);
            Route::get('summary', [JobsApi::class, 'summaryTranslated']);
            Route::get('paginated', [JobsApi::class, 'paginatedTranslated']);
            Route::get('summary/paginated', [JobsApi::class, 'summaryPaginatedTranslated']);
            Route::get('{id}', [JobsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('slug/{slug}', [JobsApi::class, 'translatedBySlug'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('summary/{id}', [JobsApi::class, 'summaryByIdTranslated'])->where('id', '[0-9]+');
            Route::get('summary/slug/{slug}', [JobsApi::class, 'summaryBySlugTranslated'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('home-page', [JobsApi::class, 'homeTranslated']);
            Route::get('home-page/summary', [JobsApi::class, 'homeSummaryTranslated']);
        });
    });

    Route::prefix('education')->group(function () {
        Route::get('/', [EducationApi::class, 'all']);
        Route::get('summary', [EducationApi::class, 'summary']);
        Route::get('paginated', [EducationApi::class, 'paginated']);
        Route::get('summary/paginated', [EducationApi::class, 'summaryPaginated']);
        Route::get('{id}', [EducationApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('slug/{slug}', [EducationApi::class, 'bySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('summary/{id}', [EducationApi::class, 'summaryById'])->where('id', '[0-9]+');
        Route::get('summary/slug/{slug}', [EducationApi::class, 'summaryBySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('home-page', [EducationApi::class, 'home']);
        Route::get('home-page/summary', [EducationApi::class, 'homeSummary']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [EducationApi::class, 'allTranslated']);
            Route::get('summary', [EducationApi::class, 'summaryTranslated']);
            Route::get('paginated', [EducationApi::class, 'paginatedTranslated']);
            Route::get('summary/paginated', [EducationApi::class, 'summaryPaginatedTranslated']);
            Route::get('{id}', [EducationApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('slug/{slug}', [EducationApi::class, 'translatedBySlug'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('summary/{id}', [EducationApi::class, 'summaryByIdTranslated'])->where('id', '[0-9]+');
            Route::get('summary/slug/{slug}', [EducationApi::class, 'summaryBySlugTranslated'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('home-page', [EducationApi::class, 'homeTranslated']);
            Route::get('home-page/summary', [EducationApi::class, 'homeSummaryTranslated']);
        });
    });

    Route::prefix('certifications')->group(function () {
        Route::get('/', [CertificationsApi::class, 'all']);
        Route::get('summary', [CertificationsApi::class, 'summary']);
        Route::get('paginated', [CertificationsApi::class, 'paginated']);
        Route::get('summary/paginated', [CertificationsApi::class, 'summaryPaginated']);
        Route::get('{id}', [CertificationsApi::class, 'byId'])->where('id', '[0-9]+');
        Route::get('slug/{slug}', [CertificationsApi::class, 'bySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('summary/{id}', [CertificationsApi::class, 'summaryById'])->where('id', '[0-9]+');
        Route::get('summary/slug/{slug}', [CertificationsApi::class, 'summaryBySlug'])->where('slug', '[A-Za-z0-9\-]+');
        Route::get('home-page', [CertificationsApi::class, 'home']);
        Route::get('home-page/summary', [CertificationsApi::class, 'homeSummary']);
        Route::prefix('translated')->group(function () {
            Route::get('/', [CertificationsApi::class, 'allTranslated']);
            Route::get('summary', [CertificationsApi::class, 'summaryTranslated']);
            Route::get('paginated', [CertificationsApi::class, 'paginatedTranslated']);
            Route::get('summary/paginated', [CertificationsApi::class, 'summaryPaginatedTranslated']);
            Route::get('{id}', [CertificationsApi::class, 'translated'])->where('id', '[0-9]+');
            Route::get('slug/{slug}', [CertificationsApi::class, 'translatedBySlug'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('summary/{id}', [CertificationsApi::class, 'summaryByIdTranslated'])->where('id', '[0-9]+');
            Route::get('summary/slug/{slug}', [CertificationsApi::class, 'summaryBySlugTranslated'])->where('slug', '[A-Za-z0-9\-]+');
            Route::get('home-page', [CertificationsApi::class, 'homeTranslated']);
            Route::get('home-page/summary', [CertificationsApi::class, 'homeSummaryTranslated']);
        });
    });

    Route::post('/send-email', [MailController::class, 'sendContactForm']);
});
