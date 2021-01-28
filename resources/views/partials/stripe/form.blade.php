<form action="{{ route('subscriptions.process_subscription') }}" method="POST">
    @csrf
    <input type="hidden" name="type" value="{{ $product['type'] }}" />
    <hr />
    <stripe-form
        stripe_key="{{ env('STRIPE_KEY') }}"
        name="{{ $product['name'] }}"
        amount="{{ $product['amount'] }}"
        description="{{ $product['description'] }}"
    ></stripe-form>
</form>