<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="border-2 border-gray-100 w-1/2 h-[400px] m-auto mt-[220px] bg-indigo-600 text-white text-center">
    <form action=" {{ route('City-Status')}} " method="POST" class="p-10">
        @csrf
        <label class="block m-auto ">
            Enter a City name
        </label>
        <input type="text" name="city" id="" class="block m-auto mt-4 text-black">
        <button class="block m-auto mt-4 bg-rose-400 hover:bg-rose-600 duration-300 w-[100px] h-[50px] rounded">Submit</button>
    </form>
    <form action=" {{ route('Crood-Status') }} " method="POST">
        @csrf
        <label for="" class="mb-2">Enter Coordinates</label>

        <div>
            <h1 class="mt-3 mb-3">Example lat:44.34 & lon:10.99</h1>
            <div class="flex gap-5 justify-evenly">
                <div>
            <label for="">Lon</label>
            <input class="text-black" type="text" name="lon" id="">
                </div>
                <div>
            <label for="">Lat</label>
            <input class="text-black" type="text" name="lat" id="">
                </div>
            </div>
        </div>
        <button class="mt-4 bg-rose-400 hover:bg-rose-600 duration-300 w-[100px] h-[50px] rounded">Submit</button>
    </form>
</div>
</body>
</html>
