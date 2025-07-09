<x-mail::message>
# Congratulations, {{ $user->name }}!

You've placed 3 orders with CampusBite. As a thank you, enjoy a **free snack** with your next order!

Just mention this email at checkout or reply to claim your reward.

<x-mail::button :url="url('/menu')">
Order Again
</x-mail::button>

Thank you for being a loyal customer!

Best,<br>
The CampusBite Team
</x-mail::message>
