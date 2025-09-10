<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): true
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'form_name'   => 'required|string|max:50',
            'from_email'  => 'required|email|max:255',
            'from_name'   => 'required|string|max:100',
            'to_email'    => 'required|email|max:255',
            'subject'     => 'required|string|max:255',
            'message'     => 'required|string|max:5000',
        ];
    }

    public function messages(): array
    {
        return [
            'form_name.in' => 'Invalid form type selected.',
            'from_name.regex' => 'The name may only contain letters, spaces, hyphens, apostrophes, and periods.',
            'subject.min' => 'The subject must be at least 5 characters long.',
            'message.min' => 'The message must be at least 10 characters long.',
            'message.max' => 'The message cannot exceed 5000 characters.',
        ];
    }

    public function attributes(): array
    {
        return [
            'from_email' => 'sender email',
            'to_email' => 'recipient email',
            'from_name' => 'sender name',
        ];
    }
}

