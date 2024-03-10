@php
    $redirectUrl = route('home')
@endphp

<x-mail::message>
# Welcome to {{ config('app.name') }}

Your adventure starts now! We've received your inquiry and our team is already working on crafting your perfect journey. Get ready for an experience tailored just for you.

<x-mail::button :url="$redirectUrl">
Explore Website
</x-mail::button>

<p>Got questions or want to share more about your travel dreams? We're all ears!</p>

Thanks,<br>
{{ config('app.name') }}<br>
{{ config('app.primary_contact') }}
</x-mail::message>
