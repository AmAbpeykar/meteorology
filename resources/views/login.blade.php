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





@if($errors->any())
    {{ print_r($errors->all()) }}
@endif

@if(!empty($banner))
    <div class="w-full h-full mt-0 py-28 bg-no-repeat bg-center bg-contain" style="background-image: url({{ asset('images/' . $banner['image_path']) }})">
    </div>
@endif
<form action=" {{route('login')}}" class="w-3/6 h-4/6 @if(empty($banner)) mt-28 @endif text-center m-auto p-10 opacity-100" method="POST">
    @csrf


    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="text"
               class="absolute text-rose-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent text-bold border-b-2 border-b-gray-400 text-center focus:border-b-rose-600 valid:border-b-rose-600 focus:outline-none peer"
               required placeholder="" name="email" id=""/>
        <label id="label" for=""
               class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-rose-600 peer-focus:top-0 peer-valid:text-rose-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Email</label>

    </div>

    <div class="relative h-14 z-0 mb-5 w-full">
        <input type="password"
               class="absolute text-rose-800 bottom-0 right-0 left-0 w-full h-10 text-sm bg-transparent text-bold border-b-2 border-b-gray-400 text-center focus:border-b-rose-600 valid:border-b-rose-600 focus:outline-none peer"
               required placeholder="" name="password" id=""/>
        <label id="label" for=""
               class="absolute m-auto top-6 right-0  left-0 text-gray-500 -z-10 transform peer-focus:text-rose-600 peer-focus:top-0 peer-valid:text-rose-600 peer-valid:top-0 peer-valid:text-sm peer-focus:text-xs duration-300">Password</label>

    </div>



    <button type="submit" value="submit" name="submit"
            class="bg-rose-400 mt-9 text-white p-2 w-40 hover:bg-rose-600 rounded-md duration-300">
        Submit
    </button>
</form>



</body>
</html>
