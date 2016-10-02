<!-- Youth -->
<div class="block__content hide" data-toggle-target="showPlayerYouth showDone">
    <form class="form" action="{{ route('store.players', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" spacing="1" data-form="updatePlayerYouth" >
        {{ csrf_field() }}

        <input type="hidden" name="season_id" value="{{ $seasons->id }}">
        <h3>Youth</h3>
        <table>
            <thead>
                <tr>
                    <td class="small">Pos</td>
                    <td class="small">Name</td>
                    <td class="small">Age</td>
                    <td class="small">Ovr</td>
                    <td class="small">Action</td>
                </tr>
            </thead>
            <tbody data-row-body="youth">
                <tr class="" data-row="youth" data-delete-row="youth">
                    <td class=""><input type="text" name="row[0][position]" value=""></td>
                    <td class=""><input type="text" name="row[0][name]" value=""></td>
                    <td class=""><input type="number" name="row[0][age]" value=""></td>
                    <td class=""><input type="number" name="row[0][overall]" value=""></td>
                    <td class="" data-delete="youth">X</td>
                </tr>
            </tbody>
        </table>
        <p><a href="#" data-row-add="youth">Add more players</a></p>
        <div class="layout-split-2--apart">
            <div class="column">
                <button type="button" name="button" data-toggle-trigger="showCompetition">Back</button>
            </div>
            <div class="column">
                <button type="button" name="button">Skip</button>
                <button type="button" name="button" data-submit-forms data-toggle-trigger="showDone">Done</button>
            </div>
        </div>
    </form>

</div>
