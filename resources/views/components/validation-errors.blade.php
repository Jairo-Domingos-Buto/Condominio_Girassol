@if ($errors->any())
<div {{ $attributes }}>
    <div class="div-h1 font-medium text-red-600">{{ __('Upss! Houve algum erro!') }}</div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif