import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
const ListTechnologies = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListTechnologies.url(options),
    method: 'get',
})

ListTechnologies.definition = {
    methods: ["get","head"],
    url: '/admin/technologies',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
ListTechnologies.url = (options?: RouteQueryOptions) => {
    return ListTechnologies.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
ListTechnologies.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListTechnologies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
ListTechnologies.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListTechnologies.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
const ListTechnologiesForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListTechnologies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
ListTechnologiesForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListTechnologies.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\ListTechnologies::__invoke
* @see app/Filament/Resources/Technologies/Pages/ListTechnologies.php:7
* @route '/admin/technologies'
*/
ListTechnologiesForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListTechnologies.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListTechnologies.form = ListTechnologiesForm

export default ListTechnologies