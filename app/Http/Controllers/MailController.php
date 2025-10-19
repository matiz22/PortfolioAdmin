<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\MailEntry;
use App\Services\AdminService;
use Exception;
use Illuminate\Support\Facades\Log;
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
            try {
                Mail::to($recipientEmail)->send(new ContactForm($mailEntry));
            } catch (Exception $e) {
                Log::warning('Failed to send email to: ' . $recipientEmail);
                Log::warning('Validation errors', ['validated' => $validated]);
                Log::warning('Content', ['mailEntry' => $mailEntry->toArray()]);
                Log::warning('Error details: ' . $e->getMessage(), ['exception' => $e]);
            }
        }


        return ['message' => 'Contact form sent successfully.'];
    }
}
