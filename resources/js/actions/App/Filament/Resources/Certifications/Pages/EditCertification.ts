import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
const EditCertification = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditCertification.url(args, options),
    method: 'get',
})

EditCertification.definition = {
    methods: ["get","head"],
    url: '/admin/certifications/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
EditCertification.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
    if (typeof args === 'string' || typeof args === 'number') {
        args = { record: args }
    }

    if (Array.isArray(args)) {
        args = {
            record: args[0],
        }
    }

    args = applyUrlDefaults(args)

    const parsedArgs = {
        record: args.record,
    }

    return EditCertification.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
EditCertification.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditCertification.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
EditCertification.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditCertification.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
const EditCertificationForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditCertification.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
EditCertificationForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditCertification.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Certifications\Pages\EditCertification::__invoke
* @see app/Filament/Resources/Certifications/Pages/EditCertification.php:7
* @route '/admin/certifications/{record}/edit'
*/
EditCertificationForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditCertification.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditCertification.form = EditCertificationForm

export default EditCertification