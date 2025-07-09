<x-mail::message>
# Welcome to CampusBite, {{ $user->name }}!

Thank you for signing up. You can now order affordable, fast food online with CampusBite.

## 🎁 Your Promo Code
Use code **{{ $promoCode }}** at checkout to get **10% off your first order**!

<x-mail::button :url="url('/menu')">
Order Now
</x-mail::button>

Stay tuned for exclusive offers and updates.

Thanks,<br>
The CampusBite Team
</x-mail::message>
