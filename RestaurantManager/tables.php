<?php

require "components/header.php";

?>

<main class="tables">
    <form class="rendered-form" action="index.php" method="POST">
        <div class="form-group">
            <label for="table">Tables</label>
            <select class="form-control" name="table" id="table">
                <option value="t-1">Table 1</option>
                <option value="t-2">Table 2</option>
                <option value="t-3">Table 3</option>
                <option value="t-4">Table 4</option>
                <option value="t-5">Table 5</option>
                <option value="t-6">Table 6</option>
            </select>
        </div>
        <div class="form-group">
            <label for="schedule">Set Schedule</label>
            <select class="form-control" name="schedule" id="schedule">
                <option value="7:00">7:00</option>
                <option value="8:00">8:00</option>
                <option value="9:00">9:00</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default">Place A Schedule</button>
    </form>

</main>


<?php require "components/footer.php"; ?>