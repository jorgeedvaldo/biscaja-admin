@php($icon = $icon ?? 'dots')
@switch($icon)
    @case('spray')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h4v4H9zM10 7v3M7 10h10l1 11H6L7 10z"/><circle cx="16" cy="4" r="1"/><circle cx="18" cy="6" r="0.8"/><circle cx="16" cy="8" r="0.8"/></svg>
        @break
    @case('wrench')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M14.7 6.3a4 4 0 015.3 5.3l-2-2-2.6.6-.6 2.6 2 2a4 4 0 01-5.3-5.3M9.3 17.7L4 23l-2-2 5.3-5.3M9 11l4 4"/></svg>
        @break
    @case('plug')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3v4M15 3v4M7 7h10v3a5 5 0 01-5 5 5 5 0 01-5-5V7zM12 15v6"/></svg>
        @break
    @case('leaf')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2c5 0 9 4 9 9 0 6-5 11-11 11-3 0-6-1-6-1s4-4 4-9 4-10 4-10z"/><path stroke-linecap="round" d="M12 12c-2 2-4 4-7 8"/></svg>
        @break
    @case('truck')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M3 7h11v10H3zM14 10h4l3 3v4h-7zM7 20a2 2 0 100-4 2 2 0 000 4zM17 20a2 2 0 100-4 2 2 0 000 4z"/></svg>
        @break
    @case('roller')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="4" width="14" height="5" rx="1"/><path stroke-linecap="round" stroke-linejoin="round" d="M17 6h3v4h-7v3M12 13v3a2 2 0 002 2v3"/></svg>
        @break
    @case('bolt')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M13 2L4 14h7l-1 8 9-12h-7z"/></svg>
        @break
    @case('faucet')
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h6v3H7zM10 4v3M3 13h4l3-3M14 8h3a3 3 0 013 3v2M14 14v6h-4v-4"/></svg>
        @break
    @case('dots')
    @default
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><circle cx="6" cy="12" r="2"/><circle cx="12" cy="12" r="2"/><circle cx="18" cy="12" r="2"/></svg>
@endswitch
