<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Signup</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
        <h2 class="text-2xl text-center text-gray-800 mb-6">User Set Password</h2>
        @error('user')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
        <form action="/user-set-forgot-password" method="post" class="space-y-4">
            @csrf
            
            <div>
                
                <input id="user_email" type="hidden" placeholder="Enter User Email" value="{{ $email }}" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('email')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password" class="text-gray-600 mb-1">Password</label>
                <input id="password" type="password" placeholder="Enter User Password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                @error('password')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password_confirmation" class="text-gray-600 mb-1">Confirm Password</label>
                <input id="password_confirmation" type="password" placeholder="Confirm User Password" name="password_confirmation"
                    class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                
            </div>
            <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Update Password</button>
        </form>
    </div>

</div>
</body>

</html>
