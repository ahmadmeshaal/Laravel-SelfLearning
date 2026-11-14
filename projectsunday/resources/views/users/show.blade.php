<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Details</title>
</head>

<body>
    <h1>User Details</h1>

    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>

    <h2>Seller</h2>

    @if ($user->seller)
    <p>Store: {{ $user->seller->store_name }}</p>
    @else
    <p>No seller account.</p>
    @endif

    <h2>Orders</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Order</th>
                <th>Date</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($user->orders as $order)
            <tr>
                <td>Order #{{ $order->id }}</td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td>
                    {{ number_format(
                            $order->orderItems->sum(function ($item) {
                                return $item->quantity * $item->price;
                            }),
                            2
                        ) }}
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No orders found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('users.index') }}">Back</a>
</body>

</html>