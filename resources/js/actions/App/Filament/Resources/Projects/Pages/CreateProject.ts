import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
const CreateProject = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateProject.url(options),
    method: 'get',
})

CreateProject.definition = {
    methods: ["get","head"],
    url: '/admin/projects/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
CreateProject.url = (options?: RouteQueryOptions) => {
    return CreateProject.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
CreateProject.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateProject.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
CreateProject.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateProject.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
const CreateProjectForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProject.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
CreateProjectForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProject.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\CreateProject::__invoke
* @see app/Filament/Resources/Projects/Pages/CreateProject.php:7
* @route '/admin/projects/create'
*/
CreateProjectForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProject.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateProject.form = CreateProjectForm

export default CreateProject