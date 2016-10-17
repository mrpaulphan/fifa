<div class="sidebar column" data-block-color="{{ $seasons->color}}">
    <header class="sidebar__header">
        <h1>Road to Glory</h1>
        <h2>Jeff Matthews</h2>
    </header>
    <nav class="sidebar__nav">
        <a href="#" class="sidebar__nav-link">Overview</a>
        <a href="{{ route('get.squad', [Auth::user()->username, $seasons->belongsToSave->slug])}}" class="sidebar__nav-link">Squad</a>
        <a href="#" class="sidebar__nav-link">Transfer</a>
        <a href="#" class="sidebar__nav-link">Youth</a>
        <a href="#" class="sidebar__nav-link">Career</a>
    </nav>
</div>
