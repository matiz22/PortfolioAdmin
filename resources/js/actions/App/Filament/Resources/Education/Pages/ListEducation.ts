import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../../../wayfinder'
/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
const ListEducation = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListEducation.url(options),
    method: 'get',
})

ListEducation.definition = {
    methods: ["get","head"],
    url: '/admin/education',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
ListEducation.url = (options?: RouteQueryOptions) => {
    return ListEducation.definition.url + queryParams(options)
}

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
ListEducation.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: ListEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
ListEducation.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: ListEducation.url(options),
    method: 'head',
})

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
const ListEducationForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
ListEducationForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListEducation.url(options),
    method: 'get',
})

/**
* @see \App\Filament\Resources\Education\Pages\ListEducation::__invoke
* @see app/Filament/Resources/Education/Pages/ListEducation.php:7
* @route '/admin/education'
*/
ListEducationForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
    action: ListEducation.url({
        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
            _method: 'HEAD',
            ...(options?.query ?? options?.mergeQuery ?? {}),
        }
    }),
    method: 'get',
})

ListEducation.form = ListEducationForm

export default ListEducation