import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
const EditTechnology = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditTechnology.url(args, options),
    method: 'get',
})

EditTechnology.definition = {
    methods: ["get","head"],
    url: '/admin/technologies/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
EditTechnology.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return EditTechnology.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
EditTechnology.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditTechnology.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
EditTechnology.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditTechnology.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
const EditTechnologyForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditTechnology.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
EditTechnologyForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditTechnology.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Technologies\Pages\EditTechnology::__invoke
* @see app/Filament/Resources/Technologies/Pages/EditTechnology.php:7
* @route '/admin/technologies/{record}/edit'
*/
EditTechnologyForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditTechnology.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditTechnology.form = EditTechnologyForm

export default EditTechnology