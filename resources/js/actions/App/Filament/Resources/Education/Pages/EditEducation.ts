import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
const EditEducation = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditEducation.url(args, options),
    method: 'get',
})

EditEducation.definition = {
    methods: ["get","head"],
    url: '/admin/education/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
EditEducation.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return EditEducation.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
EditEducation.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditEducation.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
EditEducation.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditEducation.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
const EditEducationForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditEducation.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
EditEducationForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditEducation.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\EditEducation::__invoke
* @see app/Filament/Resources/Education/Pages/EditEducation.php:7
* @route '/admin/education/{record}/edit'
*/
EditEducationForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditEducation.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditEducation.form = EditEducationForm

export default EditEducation