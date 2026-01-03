<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
    <div class="flex justify-center">
    <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 mt-6  ">
    @foreach($contacts as $contact)
        <li class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
            <h3 class="text-lg font-semibold text-gray-800">
                {{ $contact->name }}
            </h3>

            <p class="text-sm text-gray-600 mt-1">
                📧 {{ $contact->email }}
            </p>

            <p class="text-sm text-gray-600">
                📞 {{ $contact->phone }}
            </p>
        </li>
    @endforeach
</ul>
</div>
   

</body>
</html>