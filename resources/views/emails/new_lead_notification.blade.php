<x-mail::message>
# New Lead

Here is the information provided by the lead:

- **Name:** {{ $lead->name }}
- **Email:** {{ $lead->email }}
- **Contact:** {{ $lead->contact }}
- **Message:** {{ $lead->message }}
- **Source:** {{ $lead->source }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>