<?php
function getReward($points) {
    if ($points >= 90) return "Gold";
    elseif ($points >= 75) return "Silver";
    elseif ($points >= 50) return "Bronze";
    else return "No reward";
}

?>
<html>
    <form action="5.simulate_student.php" method="post">
        <input type="number" name="points" placeholder="Enter points">
        <button type="submit">Submit</button>
    </form>
    <?php
    if (isset($_POST["points"])) {
        echo "Points: " . $_POST["points"] . "<br>";
        echo "Reward: " . getReward($_POST["points"]) . "<br>";
    }
    ?>
</html>