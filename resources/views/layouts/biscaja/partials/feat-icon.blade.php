@php($icon = $icon ?? 'shield')
@switch($icon)
    @case('shield')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3l8 3v6c0 5-3.5 8.5-8 9-4.5-.5-8-4-8-9V6l8-3zM9 12l2 2 4-4"/></svg>
        @break
    @case('badge')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2l2.4 2.5 3.4-.4.4 3.4L20.7 10l-2.5 2.4.4 3.4-3.4.4L12 18.7l-2.4-2.5-3.4-.4-.4-3.4L3.3 10l2.5-2.4-.4-3.4 3.4-.4z"/><path stroke-linecap="round" d="M9 11l2 2 4-4"/></svg>
        @break
    @case('headset')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M4 13a8 8 0 0116 0v5a2 2 0 01-2 2h-2v-7h4M4 13v5a2 2 0 002 2h2v-7H4"/></svg>
        @break
    @case('thumb')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M7 10v11H4V10h3zM7 10l4-7c1.5 0 2.5 1 2.5 2.5V9h5a2 2 0 012 2l-1.5 8a2 2 0 01-2 2H7"/></svg>
        @break
    @default
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="9"/></svg>
@endswitch
