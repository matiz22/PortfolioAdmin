import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
const CreateCertification = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateCertification.url(options),
    method: 'get',
})

CreateCertification.definition = {
    methods: ["get","head"],
    url: '/admin/certifications/create',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
CreateCertification.url = (options?: RouteQueryOptions) => {
    return CreateCertification.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
CreateCertification.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: CreateCertification.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
CreateCertification.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: CreateCertification.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
const CreateCertificationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateCertification.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
CreateCertificationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateCertification.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\CreateCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/CreateCertification.php:7
* @route '/admin/certifications/create'
*/
CreateCertificationForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: CreateCertification.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

CreateCertification.form = CreateCertificationForm

export default CreateCertification