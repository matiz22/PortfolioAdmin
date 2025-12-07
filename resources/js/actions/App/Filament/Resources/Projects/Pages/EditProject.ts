import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
const EditProject = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditProject.url(args, options),
    method: 'get',
})

EditProject.definition = {
    methods: ["get","head"],
    url: '/admin/projects/{record}/edit',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
EditProject.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return EditProject.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
EditProject.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: EditProject.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
EditProject.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: EditProject.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
const EditProjectForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProject.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
EditProjectForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProject.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Projects\Pages\EditProject::__invoke
* @see app/Filament/Resources/Projects/Pages/EditProject.php:7
* @route '/admin/projects/{record}/edit'
*/
EditProjectForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: EditProject.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

EditProject.form = EditProjectForm

export default EditProject