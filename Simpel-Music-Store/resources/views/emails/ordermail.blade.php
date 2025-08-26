<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h1>Order #{{ $data['order_id'] }}</h1>
    <p>Hi {{ $data['customer_name'] }},</p>
    <p>Thank you for your order. Here are the details:</p>
    <ul>
        @foreach ($data['items'] as $item)
            <li>{{ $item['name'] }} - {{ $item['quantity'] }} x ${{ $item['price'] }}</li>
        @endforeach
    </ul>
    <p>Total: ${{ $data['total'] }}</p>
</body>
</html>
