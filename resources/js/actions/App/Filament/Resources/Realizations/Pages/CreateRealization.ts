import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
const CreateRealization = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateRealization.url(options),
    method: 'get',
})

CreateRealization.definition = {
    methods: ["get","head"],
    url: '/admin/realizations/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
CreateRealization.url = (options?: RouteQueryOptions) => {
    return CreateRealization.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
CreateRealization.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateRealization.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
CreateRealization.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateRealization.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
const CreateRealizationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateRealization.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
CreateRealizationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateRealization.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\CreateRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/CreateRealization.php:7
* @route '/admin/realizations/create'
*/
CreateRealizationForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateRealization.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateRealization.form = CreateRealizationForm

export default CreateRealization