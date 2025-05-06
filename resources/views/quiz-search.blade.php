
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search : {{ str_replace('-',' ',$quiz) }}</title>
</head>
<body>
    
    <x-user-navbar ></x-user-navbar>
 
    <div class="bg-gray-100 flex flex-col items-center min-h-screen ">        
            <h2 class="text-2xl text-center text-green-800 mb-6 font-bold">Search : {{ str_replace('-',' ',$quiz) }}
                
            </h2>
        <div class="w-200">
            
            <ul > 
                <li class="p-2 font-bold">
                    <ul class="flex justify-between">
                        <li class="w-30" >Quiz Id</li>
                        <li class="w-140" >Name</li>
                        <li class="w-140" >Mcq Count</li>
                        <li class="w-30" >Action</li>
                    </ul>
                </li>
                @foreach ($quizData as $item)
                <li class="even:bg-gray-200 p-2">
                    <ul class="flex justify-between ">
                        <li class="w-30" >{{$item->id}}</li>
                        <li class="w-140" >{{$item->name}}</li>
                        <li class="w-140" >{{$item->mcq_count}}</li>
                        <li class="w-30" >
                            <a href="/start-quiz/{{ $item->id }}/{{ str_replace(' ','-',$item->name) }}" class="text-green-500 font-bold"> Attempt Quiz
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>