<!DOCTYPE html>
<html>
<head>
  <title>Lara Blogs | Home</title>
  <style>
    body{
      padding: 0;
      margin: 0;
      font-family: Aptos, sans-serif;
      min-height: 100vh;
    }
  </style>
   @vite('resources/css/app.css')
</head>
<body>
  <header style="background-color: #dae4f5;  " class=" h-20 ">
    <nav style="display: flex; justify-content: space-between; align-items: center; padding: 20px; ">
      <h1 style="display: inline;">Welcome to Lara Blogs</h1>
      <div style=" display: flex; justify-content: center; align-items: center;  height: 40px; width:200px; border-radius: 3px; background-color: #4287f5 ; ">
        <a style="text-decoration: none; color: white; font-weight: 900; " href="{{ route('blog.create') }}">Create Blog</a>
      </div>
    </nav>
  </header>
  
    <main style="min-height: calc(100vh - 80px - 36px );">
      <section>
        <h2>Latest Blogs</h2>
    
      </section>
    </main>

    <footer class="bg-neutral-400 h-11 w-auto flex justify-center py-3 ">
      <p class=" inline-block ">&copy;{{ date('Y') }} LaraBlogs | All rights reserved.</p>
    </footer>
</body>
</html>