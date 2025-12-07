import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
export const all = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

all.definition = {
    methods: ["get","head"],
    url: '/api/v1/proficiencies',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
all.url = (options?: RouteQueryOptions) => {
    return all.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
all.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
all.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: all.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
const allForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
*/
allForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: all.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::all
* @see app/Http/Controllers/ProficienciesApi.php:24
* @route '/api/v1/proficiencies'
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
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
*/
export const byId = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

byId.definition = {
    methods: ["get","head"],
    url: '/api/v1/proficiencies/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
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
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
*/
byId.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
*/
byId.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: byId.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
*/
const byIdForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
*/
byIdForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: byId.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::byId
* @see app/Http/Controllers/ProficienciesApi.php:37
* @route '/api/v1/proficiencies/{id}'
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
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
export const allTranslated = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

allTranslated.definition = {
    methods: ["get","head"],
    url: '/api/v1/proficiencies/translated',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
allTranslated.url = (options?: RouteQueryOptions) => {
    return allTranslated.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
allTranslated.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
allTranslated.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: allTranslated.url(options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
const allTranslatedForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
*/
allTranslatedForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: allTranslated.url(options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::allTranslated
* @see app/Http/Controllers/ProficienciesApi.php:73
* @route '/api/v1/proficiencies/translated'
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
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
*/
export const translated = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

translated.definition = {
    methods: ["get","head"],
    url: '/api/v1/proficiencies/translated/{id}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
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
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
*/
translated.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
*/
translated.head = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: translated.url(args, options),
    method: 'head',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
*/
const translatedForm = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
*/
translatedForm.get = (args: { id: string | number } | [id: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: translated.url(args, options),
    method: 'get',
})

/**
* @see \App\Http\Controllers\ProficienciesApi::translated
* @see app/Http/Controllers/ProficienciesApi.php:85
* @route '/api/v1/proficiencies/translated/{id}'
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

const ProficienciesApi = { all, byId, allTranslated, translated }

export default ProficienciesApi