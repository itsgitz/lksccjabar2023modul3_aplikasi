<x-layout>
  <x-slot:title>{{ $news->title }}</x-slot:title>
  <div class="py-3"></div>
  <div class="py-3">
    <div>
      <h3 class="fw-bold">{{ $news->title }}</h3>
    </div>
    <div>
      <span class="fw-light">
        {{ $news->user->name }} - {{ date_format($news->created_at, 'Y/m/d H:i:s') }} &#11088;
      </span>
    </div>
  </div>
  <div class="py-3">
    <div class="text-center py-3">
      <img class="img-fluid" src="{{ $news->image_url }}" width="400" height="400">
    </div>
    <div class="py-3">
      {{ $news->content }}
    </div>
  </div>
  <div class="py-3">
    <a href="{{ route('news.index') }}">Back</a>
  </div>
</x-layout>
