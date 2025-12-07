import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
const ListCertifications = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListCertifications.url(options),
    method: 'get',
})

ListCertifications.definition = {
    methods: ["get","head"],
    url: '/admin/certifications',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
ListCertifications.url = (options?: RouteQueryOptions) => {
    return ListCertifications.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
ListCertifications.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListCertifications.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
ListCertifications.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListCertifications.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
const ListCertificationsForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListCertifications.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
ListCertificationsForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListCertifications.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\ListCertifications::__invoke
* @see app/Filament/Resources/Certifications/Pages/ListCertifications.php:7
* @route '/admin/certifications'
*/
ListCertificationsForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListCertifications.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListCertifications.form = ListCertificationsForm

export default ListCertifications