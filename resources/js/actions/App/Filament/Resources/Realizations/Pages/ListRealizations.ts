import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
const ListRealizations = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListRealizations.url(options),
    method: 'get',
})

ListRealizations.definition = {
    methods: ["get","head"],
    url: '/admin/realizations',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
ListRealizations.url = (options?: RouteQueryOptions) => {
    return ListRealizations.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
ListRealizations.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListRealizations.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
ListRealizations.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListRealizations.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
const ListRealizationsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListRealizations.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
ListRealizationsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListRealizations.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\ListRealizations::__invoke
* @see app/Filament/Resources/Realizations/Pages/ListRealizations.php:7
* @route '/admin/realizations'
*/
ListRealizationsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListRealizations.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListRealizations.form = ListRealizationsForm

export default ListRealizations