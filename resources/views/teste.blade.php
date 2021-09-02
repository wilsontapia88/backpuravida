<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{dd($aula->class_thumb)}} --}}
    {{-- {{url('storage/uploads/'.$aula->class_thumb)}} --}}
    <div>
        <img src="{{url('storage/uploads/'.$aula->class_thumb)}}" alt="">
    </div>
</body>
</html>
