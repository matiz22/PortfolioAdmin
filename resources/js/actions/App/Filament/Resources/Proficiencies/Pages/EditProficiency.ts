import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
const EditProficiency = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditProficiency.url(args, options),
    method: 'get',
})

EditProficiency.definition = {
    methods: ["get","head"],
    url: '/admin/proficiencies/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
EditProficiency.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return EditProficiency.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
EditProficiency.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditProficiency.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
EditProficiency.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditProficiency.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
const EditProficiencyForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProficiency.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
EditProficiencyForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProficiency.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Proficiencies\Pages\EditProficiency::__invoke
* @see app/Filament/Resources/Proficiencies/Pages/EditProficiency.php:7
* @route '/admin/proficiencies/{record}/edit'
*/
EditProficiencyForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProficiency.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditProficiency.form = EditProficiencyForm

export default EditProficiency