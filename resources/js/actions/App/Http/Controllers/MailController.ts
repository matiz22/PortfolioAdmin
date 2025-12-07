import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\MailController::sendContactForm
* @see app/Http/Controllers/MailController.php:22
* @route '/api/v1/send-email'
*/
export const sendContactForm = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendContactForm.url(options),
    method: 'post',
})

sendContactForm.definition = {
    methods: ["post"],
    url: '/api/v1/send-email',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\MailController::sendContactForm
* @see app/Http/Controllers/MailController.php:22
* @route '/api/v1/send-email'
*/
sendContactForm.url = (options?: RouteQueryOptions) => {
    return sendContactForm.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\MailController::sendContactForm
* @see app/Http/Controllers/MailController.php:22
* @route '/api/v1/send-email'
*/
sendContactForm.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendContactForm.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\MailController::sendContactForm
* @see app/Http/Controllers/MailController.php:22
* @route '/api/v1/send-email'
*/
const sendContactFormForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: sendContactForm.url(options),
    method: 'post',
})

/**
* @see \App\Http\Controllers\MailController::sendContactForm
* @see app/Http/Controllers/MailController.php:22
* @route '/api/v1/send-email'
*/
sendContactFormForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
    action: sendContactForm.url(options),
    method: 'post',
})

sendContactForm.form = sendContactFormForm

const MailController = { sendContactForm }

export default MailController