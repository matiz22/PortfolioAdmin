import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
const ListProficiencies = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListProficiencies.url(options),
    method: 'get',
})

ListProficiencies.definition = {
    methods: ["get","head"],
    url: '/admin/proficiencies',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
ListProficiencies.url = (options?: RouteQueryOptions) => {
    return ListProficiencies.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
ListProficiencies.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListProficiencies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
ListProficiencies.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListProficiencies.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
const ListProficienciesForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProficiencies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
ListProficienciesForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProficiencies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\ListProficiencies::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/ListProficiencies.php:7
* @route '/admin/proficiencies'
*/
ListProficienciesForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProficiencies.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListProficiencies.form = ListProficienciesForm

export default ListProficiencies