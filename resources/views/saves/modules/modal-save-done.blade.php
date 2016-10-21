<!-- Youth -->
<div class="block__content hide" data-toggle-target="showDone">
    <h3>All Done</h3>
    <p>you've filled in the basic requiremnts! Use the edit button on any page to add more detailed infomration as needed.</p>
    <a href="{{ route('show.seasons', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}"> Done</a>
</div>
