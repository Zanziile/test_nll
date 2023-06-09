<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>

</head>
<body>
    <h3>Admin panel</h3>
    <div>
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title of product" class="form-control">
                @error('title')
                <strong>
                    {{ $message }}
                </strong>
                @enderror
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                <strong>
                    {{ $message }}
                </strong>
                @enderror
            </div>
            <div>
                <label for="price">Price</label>
                <input type="number" step=0.01 name="price" id="price" placeholder="Price of product" class="form-control">
                @error('price')
                <strong>
                    {{ $message }}
                </strong>
                @enderror
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div>
        <a href="{{ route('product.list') }}">To products</a>

    </div>
    <div>
        <a href="{{ URL::to('/') }}">To author's opinion </a>
    </div>
</body>
</html>
