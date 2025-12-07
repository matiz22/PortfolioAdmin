import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
const homedac655b135adc60f12e688395e3e0e99 = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homedac655b135adc60f12e688395e3e0e99.url(options),
    method: 'get',
})

homedac655b135adc60f12e688395e3e0e99.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
homedac655b135adc60f12e688395e3e0e99.url = (options?: RouteQueryOptions) => {
    return homedac655b135adc60f12e688395e3e0e99.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
homedac655b135adc60f12e688395e3e0e99.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homedac655b135adc60f12e688395e3e0e99.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
homedac655b135adc60f12e688395e3e0e99.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: homedac655b135adc60f12e688395e3e0e99.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
const homedac655b135adc60f12e688395e3e0e99Form = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homedac655b135adc60f12e688395e3e0e99.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
homedac655b135adc60f12e688395e3e0e99Form.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homedac655b135adc60f12e688395e3e0e99.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/realizations/home-page'
*/
homedac655b135adc60f12e688395e3e0e99Form.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homedac655b135adc60f12e688395e3e0e99.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

homedac655b135adc60f12e688395e3e0e99.form = homedac655b135adc60f12e688395e3e0e99Form
/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
const homea38e26dbc8549fbf395ea86b2681236b = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homea38e26dbc8549fbf395ea86b2681236b.url(options),
    method: 'get',
})

homea38e26dbc8549fbf395ea86b2681236b.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
homea38e26dbc8549fbf395ea86b2681236b.url = (options?: RouteQueryOptions) => {
    return homea38e26dbc8549fbf395ea86b2681236b.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
homea38e26dbc8549fbf395ea86b2681236b.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homea38e26dbc8549fbf395ea86b2681236b.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
homea38e26dbc8549fbf395ea86b2681236b.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: homea38e26dbc8549fbf395ea86b2681236b.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
const homea38e26dbc8549fbf395ea86b2681236bForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homea38e26dbc8549fbf395ea86b2681236b.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
homea38e26dbc8549fbf395ea86b2681236bForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homea38e26dbc8549fbf395ea86b2681236b.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::home
* @see app/Http/Controllers/ProjectsApi.php:23
* @route '/api/v1/projects/home-page'
*/
homea38e26dbc8549fbf395ea86b2681236bForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homea38e26dbc8549fbf395ea86b2681236b.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

homea38e26dbc8549fbf395ea86b2681236b.form = homea38e26dbc8549fbf395ea86b2681236bForm

export const home = {
    '/api/v1/realizations/home-page': homedac655b135adc60f12e688395e3e0e99,
    '/api/v1/projects/home-page': homea38e26dbc8549fbf395ea86b2681236b,
}

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
export const all = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

all.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
all.url = (options?: RouteQueryOptions) => {
    return all.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
all.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
all.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: all.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
const allForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
allForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::all
* @see app/Http/Controllers/ProjectsApi.php:24
* @route '/api/v1/projects'
*/
allForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

all.form = allForm

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
export const byId = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

byId.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
byId.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return byId.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
byId.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
byId.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: byId.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
const byIdForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
byIdForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::byId
* @see app/Http/Controllers/ProjectsApi.php:37
* @route '/api/v1/projects/{id}'
*/
byIdForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

byId.form = byIdForm

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
export const allTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

allTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects/translated',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
allTranslated.url = (options?: RouteQueryOptions) => {
    return allTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
allTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
allTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: allTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
const allTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
allTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::allTranslated
* @see app/Http/Controllers/ProjectsApi.php:73
* @route '/api/v1/projects/translated'
*/
allTranslatedForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

allTranslated.form = allTranslatedForm

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
export const translated = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

translated.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects/translated/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
translated.url = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { id: args }
    }

    if (Array.isArray(args)) {
        args = {
            id: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        id: args.id,
    }

    return translated.definition.url
            .replace('{id}', parsedArgs.id.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
translated.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
translated.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: translated.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
const translatedForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
translatedForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::translated
* @see app/Http/Controllers/ProjectsApi.php:85
* @route '/api/v1/projects/translated/{id}'
*/
translatedForm.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

translated.form = translatedForm

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
export const homeTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

homeTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/projects/translated/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
homeTranslated.url = (options?: RouteQueryOptions) => {
    return homeTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
homeTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
homeTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: homeTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
const homeTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
homeTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProjectsApi::homeTranslated
* @see app/Http/Controllers/ProjectsApi.php:33
* @route '/api/v1/projects/translated/home-page'
*/
homeTranslatedForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

homeTranslated.form = homeTranslatedForm

const ProjectsApi = { home, all, byId, allTranslated, translated, homeTranslated }

export default ProjectsApi