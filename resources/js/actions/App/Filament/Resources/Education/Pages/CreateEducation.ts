import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
const CreateEducation = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateEducation.url(options),
    method: 'get',
})

CreateEducation.definition = {
    methods: ["get","head"],
    url: '/admin/education/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
CreateEducation.url = (options?: RouteQueryOptions) => {
    return CreateEducation.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
CreateEducation.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
CreateEducation.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateEducation.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
const CreateEducationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
CreateEducationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\CreateEducation::__invoke
* @see app/Filament/Resources/Education/Pages/CreateEducation.php:7
* @route '/admin/education/create'
*/
CreateEducationForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateEducation.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateEducation.form = CreateEducationForm

export default CreateEducation