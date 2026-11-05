@props(['title' => null])

<div {{ $attributes->merge(['class' => 'card card-round']) }}>
  @if ($title || isset($tools))
  <div class="card-header">
    <div class="card-head-row">
      <div class="card-title">{{ $title }}</div>
      @isset($tools)
      <div class="card-tools">{{ $tools }}</div>
      @endisset
    </div>
  </div>
  @endif

  <div class="card-body">
    {{ $slot }}
  </div>
</div>
