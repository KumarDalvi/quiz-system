
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
</head>
<body>
    
    <x-user-navbar ></x-user-navbar>
 
    <div class="bg-gray-100 flex flex-col items-center min-h-screen ">        
            <h1 class="text-4xl text-center text-green-800 mb-6 font-bold">{{ $quizName }}
            </h1>
            <h2 class="text-lg text-center text-green-500 mb-6 font-bold">
                This Quiz contains {{ $quizCount }} Questions and no limit to attempt Quiz
            </h2>
            <h1 class="text-2xl text-center text-green-800 mb-6 font-bold">
                Good Luck
            </h1>
            <a type="submit" href="/user-signup" class="bg-blue-500 rounded-md px-4 py-2 my-3 text-white">
                Login/Signup for Start Quiz
            </a>

    </div>
</body>
</html>