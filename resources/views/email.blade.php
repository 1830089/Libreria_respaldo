<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prueba de correo</title>
</head>
<body>
    <h1>Articulos que compro</h1>
    <table>
        <thead>
            <tr>
                <th style="width:180px;">Titulo</th>
                <th style="width:180px;">cantidad</th>
                <th style="width:180px;">precio</th>
                <th style="width:180px;"></th>
  
            </tr>
        </thead>

        <tbody>
            @foreach (Cart::getContent() as $producto)

            <tr>
              <td>{{$producto->name}}</td>
              <td>{{$producto->quantity}}</td>
              <td>${{$producto->price*$producto->quantity}}</td>
              <td>
              </td>
          </tr>
          <input type="hidden" name="subtotal_carrito" value="{{($subtotal+=$producto->price*$producto->quantity)}}">
            @endforeach
              
          </tbody>
    </table>
    <h1>subtotal = {{$subtotal}}</h1>
</body>
</html>