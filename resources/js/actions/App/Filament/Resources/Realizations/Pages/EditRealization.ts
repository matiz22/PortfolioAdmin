import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
const EditRealization = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditRealization.url(args, options),
    method: 'get',
})

EditRealization.definition = {
    methods: ["get","head"],
    url: '/admin/realizations/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
EditRealization.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return EditRealization.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
EditRealization.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditRealization.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
EditRealization.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditRealization.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
const EditRealizationForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditRealization.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
EditRealizationForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditRealization.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Realizations\Pages\EditRealization::__invoke
* @see app/Filament/Resources/Realizations/Pages/EditRealization.php:7
* @route '/admin/realizations/{record}/edit'
*/
EditRealizationForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditRealization.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditRealization.form = EditRealizationForm

export default EditRealization