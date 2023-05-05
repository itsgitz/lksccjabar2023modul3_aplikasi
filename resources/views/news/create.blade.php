<x-layout>
  <x-slot:title>Write your news!</x-slot:title>
  <x-title>Add News</x-title>
  <div class="my-3">
    <div class="py-3">
      <form action="{{ route('news.store') }}" method="post">
        @csrf
        <div class="form-floating mb-3 col-md-4">
          <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ old('title') }}">
          <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3 col-md-4">
          <textarea id="content" class="form-control" name="content" placeholder="Your news content" style="height: 300px;">
            {{ old('content') }}
          </textarea>
          <label for="content">Content</label>
        </div>
        <div class="mb-3 col-md-4">
          <label for="imageUrl">News Image</label>
          <input id="imageUrl" class="form-control" type="file" name="image_url">
        </div>
        <div class="mb-3 col-md-4">
          <a class="btn btn-danger" href="{{ route('news.index') }}">Cancel</a>
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</x-layout>
