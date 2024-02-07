<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>

    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        @method('post')

        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description">
        </div>

        <div>
            <input type="submit" value="Save a new Product">
        </div>

    </form>
</body>
</html>
