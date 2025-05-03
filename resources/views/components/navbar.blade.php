@vite('resources/css/app.css')
<nav class="bg-white shadow-md px-4 py-3">
    <div class="flex justify-between items-center">
        <div class="text-gray-700 text-2xl hover:text-blue-500 cursor-pointer">
            Quiz System
        </div>
        <div class="space-x-4">
            <a class="text-gray-700 hover:text-blue-500 cursor-pointer" href="/dashboard">Dashboard</a>
            <a class="text-gray-700 hover:text-blue-500 cursor-pointer" href="/admin-categories">Categories</a>
            <a class="text-gray-700 hover:text-blue-500 cursor-pointer" href="/add-quiz">Quiz</a>
            <a class="text-gray-700 hover:text-blue-500 cursor-pointer">Welcome {{$name}}</a>
            <a class="text-gray-700 hover:text-blue-500 cursor-pointer" href="/admin-logout">Logout</a>
        </div>
    </div>
</nav>