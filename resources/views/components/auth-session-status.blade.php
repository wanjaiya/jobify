@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm bg-green-200 text-green-800 dark:text-green-800 p-6']) }}>
        {{ $status }}
    </div>
@endif
