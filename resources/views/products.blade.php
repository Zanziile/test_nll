<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h3>This created products from DB</h3>
    <div>
        @foreach ($products as $product)
            <div>
                {{ $product->id }}. {{$product->title}} - {{ $product->price }} $
                <img src="{{Storage::url($product->image)}}" alt="">
            </div>
        @endforeach
    </div>
    <a href="{{ route('admin.create') }}">To Admin panel</a>
</body>
</html>
