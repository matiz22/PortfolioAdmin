<?php

namespace App\Http\Controllers;

use AllowDynamicProperties;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\MailEntry;
use App\Services\AdminService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    private AdminService $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function sendContactForm(ContactFormRequest $request): array
    {
        $validated = $request->validated();

        $mailEntry = MailEntry::create($validated);

        $recipientEmails = $this->adminService->getAdminsEmails();

        foreach ($recipientEmails as $recipientEmail) {
            Mail::to($recipientEmail)->send(new ContactForm($mailEntry));
        }


        return ['message' => 'Contact form sent successfully.'];
    }
}
