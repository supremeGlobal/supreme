<x-mail::message>
    # Hello {{ $name }}

    Thank you for contacting us regarding **{{ $subject }}**.

    <x-mail::panel>
        Your message:
        {{ $message }}
    </x-mail::panel>

    We will get back to you shortly.

    <x-mail::button :url="'https://yourcompany.com/contact'">
        View Details
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
