import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
const ListMailEntries = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListMailEntries.url(options),
    method: 'get',
})

ListMailEntries.definition = {
    methods: ["get","head"],
    url: '/admin/mail-entries',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
ListMailEntries.url = (options?: RouteQueryOptions) => {
    return ListMailEntries.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
ListMailEntries.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListMailEntries.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
ListMailEntries.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListMailEntries.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
const ListMailEntriesForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListMailEntries.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
ListMailEntriesForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListMailEntries.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\MailEntries\Pages\ListMailEntries::__invoke
* @see app/Filament/Resources/MailEntries/Pages/ListMailEntries.php:7
* @route '/admin/mail-entries'
*/
ListMailEntriesForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListMailEntries.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListMailEntries.form = ListMailEntriesForm

export default ListMailEntries