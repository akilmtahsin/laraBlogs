<div class="flex w-[200px] p-4 m-5 bg-black">
  <h1 class="text-xl"> {{ $blog->title}} </h1>
  <img src="{{ asset('upload/blog_images/' . $blog->image) }}" alt="{{$blog->title}}">
</div>
