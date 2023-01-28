<x-mail::message>
# Order Shipped
# 20% discount...

Your order has been shipped!

<x-mail::button :url="https://www.fnf.ca/technology">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
