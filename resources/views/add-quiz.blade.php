<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Quiz Page</title>
</head>

<body>
    <x-navbar name="{{ $name }}"></x-navbar>
    <div class="bg-gray-100 flex flex-col items-center min-h-screen ">
<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md mt-10">
    @if (!Session('quizDetails'))
    <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>

            <form action="/add-quiz" method="get" class="space-y-4">

                <div>
                    <input id="quiz" type="text" placeholder="Enter Quiz Name" name="quiz" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                </div>
                <div>
                    <select name="category_id"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add</button>
            </form>
@else
<span class="text-green-500 font-bold ">Quiz : {{Session('quizDetails')->name}}</span>
<p class="text-green-500 font-bold ">Total MCQs : {{$totalMCQs}}
 

    @if ($totalMCQs>0)
    <a href="show-quiz/{{ Session('quizDetails')->id }}" class="text-yellow-500 text-sm"> Show MCQs</a>
    @endif
</p>
<h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
<form action="add-mcq" method="post" class="space-y-4">
    @csrf
    <div>
        <textarea  type="text" placeholder="Enter Quiz Question" name="question"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none"></textarea>
            @error('question')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <div>
        <input  type="text" placeholder="Enter first option" name="a"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error('a')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <div>
        <input  type="text" placeholder="Enter second option" name="b"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error('b')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <div>
        <input  type="text" placeholder="Enter third option" name="c"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error('c')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <div>
        <input  type="text" placeholder="Enter forth option" name="d"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            @error('d')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <div>
        <select   name="correct_ans"
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
            <option value="" selected>Select Right Answer</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
        @error('correct_ans')
                <div class="text-red-500">{{$message}}</div>
                    @enderror
    </div>
    <button type="submit" value="add-more" name="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add More</button>
    <button type="submit" value="done" name="submit" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">Add & Submit</button>
    <a href="end-quiz" class="w-full bg-red-500 rounded-xl px-4 py-2 text-white text-center block">End Quiz</a>

</form>
@endif
        </div>
    </div>
