import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
export const all = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

all.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
all.url = (options?: RouteQueryOptions) => {
    return all.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
all.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
all.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: all.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
const allForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
*/
allForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::all
* @see app/Http/Controllers/RealizationsApi.php:24
* @route '/api/v1/realizations'
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
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
*/
export const byId = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

byId.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
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
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
*/
byId.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
*/
byId.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: byId.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
*/
const byIdForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
*/
byIdForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::byId
* @see app/Http/Controllers/RealizationsApi.php:37
* @route '/api/v1/realizations/{id}'
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
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
export const allTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

allTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations/translated',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
allTranslated.url = (options?: RouteQueryOptions) => {
    return allTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
allTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
allTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: allTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
const allTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
*/
allTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::allTranslated
* @see app/Http/Controllers/RealizationsApi.php:73
* @route '/api/v1/realizations/translated'
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
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
*/
export const translated = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

translated.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations/translated/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
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
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
*/
translated.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
*/
translated.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: translated.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
*/
const translatedForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
*/
translatedForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::translated
* @see app/Http/Controllers/RealizationsApi.php:85
* @route '/api/v1/realizations/translated/{id}'
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
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
export const homeTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

homeTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/realizations/translated/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
homeTranslated.url = (options?: RouteQueryOptions) => {
    return homeTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
homeTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
homeTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: homeTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
const homeTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
*/
homeTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\RealizationsApi::homeTranslated
* @see app/Http/Controllers/RealizationsApi.php:27
* @route '/api/v1/realizations/translated/home-page'
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

const RealizationsApi = { all, byId, allTranslated, translated, homeTranslated }

export default RealizationsApi