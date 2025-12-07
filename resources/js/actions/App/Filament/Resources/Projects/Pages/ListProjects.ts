import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
const ListProjects = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListProjects.url(options),
    method: 'get',
})

ListProjects.definition = {
    methods: ["get","head"],
    url: '/admin/projects',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
ListProjects.url = (options?: RouteQueryOptions) => {
    return ListProjects.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
ListProjects.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListProjects.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
ListProjects.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListProjects.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
const ListProjectsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProjects.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
ListProjectsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProjects.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\ListProjects::__invoke
* @see app/Filament/Resources/Projects/Pages/ListProjects.php:7
* @route '/admin/projects'
*/
ListProjectsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListProjects.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListProjects.form = ListProjectsForm

export default ListProjects