<x-mail::message>
# {{ $mailEntry->subject }}

**Form Type:** {{ ucwords(str_replace('_', ' ', $mailEntry->form_name)) }}

## Contact Information
- **From:** {{ $mailEntry->from_name }} ({{ $mailEntry->from_email }})
- **To:** {{ $mailEntry->to_email }}
- **Submitted:** {{ $mailEntry->created_at->format('F j, Y \a\t g:i A') }}

## Message Content
{{ $mailEntry->message }}

---

## Mail Entry Details
- **Entry ID:** #{{ $mailEntry->id }}
@if($mailEntry->status)
- **Status:** {{ ucfirst($mailEntry->status) }}
@endif
- **Created:** {{ $mailEntry->created_at->diffForHumans() }}
@if($mailEntry->updated_at && !$mailEntry->created_at->eq($mailEntry->updated_at))
- **Last Updated:** {{ $mailEntry->updated_at->diffForHumans() }}
@endif

@if($mailEntry->error_message)
<x-mail::panel>
**Error Information:** {{ $mailEntry->error_message }}
</x-mail::panel>
@endif

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
