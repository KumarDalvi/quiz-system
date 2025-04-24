<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Admin Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl text-center text-gray-800 mb-6">Admin Login</h2>
                <form action="" method="post" class="space-y-4">
                    @csrf
                    <div>
                        <label for="admin_name" class="text-gray-600 mb-1">Admin name</label>
                        <input id="admin_name" type="text" placeholder="Enter Admin Name" name="name"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    </div>
                    <div>
                        <label for="password" class="text-gray-600 mb-1">Password</label>
                        <input id="password" type="password" placeholder="Enter Admin Password" name="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none">
                    </div>
                    <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Submit</button>
                </form>
        </div>
    

</body>
</html>