@php
    $adminUrl = route('admin.leads.show', ['lead' => $lead->id]);
@endphp
<x-mail::message>
# New Lead

Here is the information provided by the lead:

- **Name:** {{ $lead->name }}
- **Package:** {{ $lead->package_name }}
- **Email:** {{ $lead->email }}
- **Contact:** {{ $lead->contact }}
- **Message:** {{ $lead->message }}
- **Source:** {{ $lead->source }}
- **User Location:** {{ $lead->user_location }}

<x-mail::button :url="$adminUrl">
View Details
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>