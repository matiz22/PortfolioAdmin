import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition, applyUrlDefaults } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
const ViewMailEntry = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewMailEntry.url(args, options),
    method: 'get',
})

ViewMailEntry.definition = {
    methods: ["get","head"],
    url: '/admin/mail-entries/{record}',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
ViewMailEntry.url = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions) => {
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

    return ViewMailEntry.definition.url
            .replace('{record}', parsedArgs.record.toString())
            .replace(/\/+$/, '') + queryParams(options)
}

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
ViewMailEntry.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ViewMailEntry.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
ViewMailEntry.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ViewMailEntry.url(args, options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
const ViewMailEntryForm = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ViewMailEntry.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
ViewMailEntryForm.get = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ViewMailEntry.url(args, options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ViewMailEntry::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ViewMailEntry.php:7
* @route '/admin/mail-entries/{record}'
*/
ViewMailEntryForm.head = (args: { record: string | number } | [record: string | number ] | string | number, options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ViewMailEntry.url(args, {
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ViewMailEntry.form = ViewMailEntryForm

export default ViewMailEntry