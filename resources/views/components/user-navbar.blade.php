@vite('resources/css/app.css')
<nav class="bg-white shadow-md px-4 py-3">
    <div class="flex justify-between items-center">
        <div class="text-green-900 text-2xl hover:text-blue-500 cursor-pointer">
            Quiz System
        </div>
        <div class="space-x-4">
            <a class="text-green-900 hover:text-blue-500 cursor-pointer" href="/">Home</a>
            <a class="text-green-900 hover:text-blue-500 cursor-pointer" href="/">Categories</a>
            @if (session('user'))
            <a class="text-green-900 hover:text-blue-500 cursor-pointer">Welcome, {{session('user')->name}}</a>
            <a class="text-green-900 hover:text-blue-500 cursor-pointer" href="/user-logout">Logout</a>
            @else
            <a class="text-green-900 hover:text-blue-500 cursor-pointer">Login</a>
            <a class="text-green-900 hover:text-blue-500 cursor-pointer" href="/user-signup">Signup</a>
            @endif
            <a class="text-green-900 hover:text-blue-500 cursor-pointer" href="/admin-logout">Blog</a>
        </div>
    </div>
</nav>