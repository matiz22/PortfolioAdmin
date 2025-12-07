import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
export const all = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

all.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
all.url = (options?: RouteQueryOptions) => {
    return all.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
all.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
all.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: all.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
const allForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
*/
allForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::all
* @see app/Http/Controllers/CertificationsApi.php:24
* @route '/api/v1/certifications'
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
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
*/
export const byId = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

byId.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
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
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
*/
byId.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
*/
byId.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: byId.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
*/
const byIdForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
*/
byIdForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::byId
* @see app/Http/Controllers/CertificationsApi.php:37
* @route '/api/v1/certifications/{id}'
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
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
export const home = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: home.url(options),
    method: 'get',
})

home.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
home.url = (options?: RouteQueryOptions) => {
    return home.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
home.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: home.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
home.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: home.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
const homeForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: home.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
homeForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: home.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::home
* @see app/Http/Controllers/CertificationsApi.php:17
* @route '/api/v1/certifications/home-page'
*/
homeForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: home.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

home.form = homeForm

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
export const allTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

allTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications/translated',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
allTranslated.url = (options?: RouteQueryOptions) => {
    return allTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
allTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
allTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: allTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
const allTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
*/
allTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::allTranslated
* @see app/Http/Controllers/CertificationsApi.php:73
* @route '/api/v1/certifications/translated'
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
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
*/
export const translated = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

translated.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications/translated/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
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
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
*/
translated.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
*/
translated.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: translated.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
*/
const translatedForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
*/
translatedForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::translated
* @see app/Http/Controllers/CertificationsApi.php:85
* @route '/api/v1/certifications/translated/{id}'
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
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
export const homeTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

homeTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/certifications/translated/home-page',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
homeTranslated.url = (options?: RouteQueryOptions) => {
    return homeTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
homeTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
homeTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: homeTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
const homeTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
*/
homeTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: homeTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\CertificationsApi::homeTranslated
* @see app/Http/Controllers/CertificationsApi.php:27
* @route '/api/v1/certifications/translated/home-page'
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

const CertificationsApi = { all, byId, home, allTranslated, translated, homeTranslated }

export default CertificationsApi