<!DOCTYPE html>
<html>

<head>
  <title>Lara Blogs | Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body>
  <header style="background-color: #dae4f5;  " class=" h-20 z-50 ">
    <nav style="display: flex; justify-content: space-between; align-items: center; padding: 20px; ">
      <p class="logo text-2xl ">LaraBlogs</p>
      <div style=" display: flex; justify-content: center; align-items: center;  height: 40px; width:200px; border-radius: 3px; background-color: #4287f5 ; ">
        <a style="text-decoration: none; color: white; font-weight: 700; " href="{{ route('blog.create') }}">CREATE NEW</a>
      </div>
    </nav>
  </header>

  <main class=" bg-white " style=" min-height: calc(100vh - 80px - 36px ); ">
    <section>
      <h2 class="text-2xl text-center m-3">Latest Blogs</h2>
      <div class="flex flex-wrap flex-col items-center  ">
        @foreach($blogs as $blog)
        <div class=" w-[800px] m-3 bg-white rounded-md p-2 shadow-lg hover:shadow-2xl ">
          <img src="{{ asset('upload/blog_images/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-40 object-cover">
          <div class="card-body">
            <h3 class=" font-bold text-2xl ">{{ $blog->title }}</h3>
            <p>{{ $blog->excerpt }}</p>
            <div class="flex justify-end"><a href="{{ route('blog.details', $blog->slug) }}" class="bg-neutral-400  inline-block rounded-full bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]  m-3 ">Read More</a></div>
          </div>
        </div>
        @endforeach

    </section>
  </main>

  <footer class="bg-neutral-400 h-11 w-auto flex justify-center py-3 ">
    <p class=" inline-block ">&copy;{{ date('Y') }} LaraBlogs | All rights reserved.</p>
  </footer>
</body>

</html>