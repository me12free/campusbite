<x-mail::message>
# {{ $campaign->name }}

{!! nl2br(e($campaign->body)) !!}

<x-mail::button :url="url('/')">
Visit CampusBite
</x-mail::button>

Thanks for being part of our community!

Best,<br>
The CampusBite Team
</x-mail::message>
