<x-layout>
  <x-slot:title>LKS Jabar 2023 - News</x-slot:title>
  <div>
    <x-status-message />
  </div>
  <div class="py-3">
    @if ($news->empty())
    <div class="my-3">
      <div class="py-3">
        <div class="alert alert-warning">
          News not found, please write yours <a href="{{ route('news.create') }}">here</a>!
        </div>
      </div>
    </div>
    @else
    <div>
      @foreach ($news as $n)
      <div>
        {{ $n->title }}
      </div>
      @endforeach
    </div>
    @endif
  </div>
</x-layout>
