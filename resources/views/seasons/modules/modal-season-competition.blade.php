<!-- Competitions -->
<div class="block__content hide" data-toggle-target="showCompetition showPlayer">
    <form class="form" action="{{ route('store.competition', [Auth::user()->username, $seasons->belongsToSave->slug ]) }}" method="POST" data-form="updateCompetition" spacing="1">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <input type="hidden" name="season_id" value="{{ $seasons->id }}">
        <h3>Competition</h3>
        <table>
            <thead>
                <tr>
                    <td class="small">Compeition Name</td>
                    <td class="small">Result</td>
                    <td class="small">Played</td>
                    <td class="small">Won</td>
                    <td class="small">Tied</td>
                    <td class="small">Lost</td>
                    <td class="small">Action</td>
                </tr>
            </thead>
            <tbody data-row-body="competition">
                <tr class="" data-row="competition" data-delete-row="competition">
                    <td class=""><input type="text" name="row[0][name]" value="" required="required"></td>
                    <td class="">
                    <select type="number" name="row[0][type]" value="" required="required">
                            <option value="League">League</option>
                            <option value="Cup">Cup</option>
                            <option value="International">International</option>
                    </select>
                    </td>
                    <td class=""><input type="number" name="row[0][played]" value="" required="required"></td>
                    <td class=""><input type="number" name="row[0][won]" value="" required="required"></td>
                    <td class=""><input type="number" name="row[0][tied]" value="" required="required"></td>
                    <td class=""><input type="number" name="row[0][lost]" value="" required="required"></td>
                    <td class=""><input type="text" name="row[0][result]" value="" required="required"></td>
                    <td class="" data-delete="competition">X</td>
                </tr>
            </tbody>
        </table>
        <p><a href="#" data-row-add="competition">Add more Compeititon</a></p>
        <div class="layout-split-2--apart">
            <div class="column">
                <button type="button" name="button" data-toggle-trigger="showCompetition">Back</button>
            </div>
            <div class="column">
                <button type="button" name="button" data-toggle-trigger="showPlayer">Skip</button>
                <button type="button" name="button" data-toggle-trigger="showPlayer">Next</button>
            </div>
        </div>
    </form>

</div>
