import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
const CreateTechnology = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateTechnology.url(options),
    method: 'get',
})

CreateTechnology.definition = {
    methods: ["get","head"],
    url: '/admin/technologies/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
CreateTechnology.url = (options?: RouteQueryOptions) => {
    return CreateTechnology.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
CreateTechnology.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateTechnology.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
CreateTechnology.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateTechnology.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
const CreateTechnologyForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateTechnology.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
CreateTechnologyForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateTechnology.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\CreateTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/CreateTechnology.php:7
* @route '/admin/technologies/create'
*/
CreateTechnologyForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateTechnology.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateTechnology.form = CreateTechnologyForm

export default CreateTechnology