import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
const CreateProficiency = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateProficiency.url(options),
    method: 'get',
})

CreateProficiency.definition = {
    methods: ["get","head"],
    url: '/admin/proficiencies/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
CreateProficiency.url = (options?: RouteQueryOptions) => {
    return CreateProficiency.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
CreateProficiency.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateProficiency.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
CreateProficiency.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateProficiency.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
const CreateProficiencyForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProficiency.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
CreateProficiencyForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProficiency.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\CreateProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/CreateProficiency.php:7
* @route '/admin/proficiencies/create'
*/
CreateProficiencyForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateProficiency.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateProficiency.form = CreateProficiencyForm

export default CreateProficiency