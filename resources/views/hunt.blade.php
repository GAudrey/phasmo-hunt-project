<!-- SECTION WHITEBOARD -->
<section id="whiteboard">
    <h2>Optional Objectives</h2>
    <p>Objective 1: Discover what type of ghost we are dealing with.</p>
    <p>Objective 2: {{ $objective1 }}.</p>
    <p>Objective 3: {{ $objective2 }}.</p>
    <p>Objective 4: {{ $objective3 }}.</p>
    <p>I've done some investigating for you. Looks like the ghost's name is {{ $firstn }} {{ $lastn }}. This Ghost also seems to 
    @if($talk == 'talk_solo')
        only respond to people who are alone. 
    @elseif($talk == 'talk_multi')
        respond to everyone. 
    @endif
    You should be albe to use it's name to anger it and get some paranormal activity. Make sure to refer to your Journal and write down any evidence you find.</p>
</section>

<!-- SECTION JOURNAL -->
<section id="journal">
    <!-- VALIDE CLUES -->
    <h3>Valide clues</h3>
    <form>
        <label for="valide_clue_1"></label>
        <select name="v_clue_1" id="valide_clue_1">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
        <label for="valide_clue_2"></label>
        <select name="v_clue_2" id="valide_clue_2">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
        <label for="valide_clue_3"></label>
        <select name="v_clue_3" id="valide_clue_3">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
    </form>
    <!-- INVALIDE CLUES -->
    <h3>Invalide clues</h3>
    <form>
        <label for="invalide_clue_1"></label>
        <select name="iv_clue_1" id="invalide_clue_1">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
        <label for="invalide_clue_2"></label>
        <select name="iv_clue_2" id="invalide_clue_2">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
        <label for="invalide_clue_3"></label>
        <select name="iv_clue_3" id="invalide_clue_3">
            <option>- Select a clue</option>
            @foreach($clues as $clue)
            <option value="{{ $clue->id_clue }}">{{ $clue->clues }}</option>
            @endforeach
        </select>
    </form>
    <!-- GHOSTS & INFORMATION ON GHOSTS -->
    <table>
        <tr>
            <th>Ghost</th>
            <th>Strength</th>
            <th>Weakness</th>
        </tr>
        @foreach($ghosts as $ghost)
        <tr>
            <td>{{ $ghost->types }}</td>
            <td>{{ $ghost->strength }}</td>
            <td>{{ $ghost->weakness }}</td>
        </tr>
        @endforeach
    </table>
</section>