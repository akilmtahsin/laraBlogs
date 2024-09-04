<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create New Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>
  <div class="row justify-content-center p-5">
    <div class="col-md-8 card shadow p-5">
      <h1 class="text-center">Create New Blog</h1>
      <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
          <label for="title" class="">Blog Title</label>
          <input type="text" name="title" id="title" class="form-control">
          @error('title')
          <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="content">Blog Content</label>
          <textarea name="content" id="content" rows="5" class="form-control"></textarea>
          @error('content')
          <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="image">Blog Image</label>
          <input type="file" name="image" id="image" class="form-control">
          @error('image')
          <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mb-3">
          <label for="excerpt">Blog Excerpt</label>
          <textarea name="excerpt" id="excerpt" rows="5" class="form-control"></textarea>
          @error('excerpt')
          <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group mb-4">
          <label for="status">Status</label>
          <select name="status" class="form-select" id="status">
            <option value="" disabled selected>Please select</option>
            <option value="draft">Draft</option>
            <option value="published">Published</option>
          </select>
          @error('status')
          <div class="error">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-sm btn-primary d-block w-100">Create Blog</button>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>