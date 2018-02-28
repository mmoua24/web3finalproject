<?php
    if (isset($_GET['submit'])){
        $userHead = $_GET["head"];
        $userChest = $_GET["chest"];
        $userArms = $_GET["arms"];
        $userWaist = $_GET["waist"];
        $userLegs = $_GET["legs"];
    }

    $armorSkills = [
        "DivineBlessing" => 0,
        "EvadeWindow" => 0,
        "Airborne" => 0,
        "IceAttack" => 0,
        "IceResistance" => 0,
        "BleedResistance" => 0,
        "SpeedSharpening" => 0,
        "Constitution" => 0,
        "CriticalEye" => 0,
        "QuickSheathe" => 0,
    ];

    function tallyHead(){
        switch($userHead){
            case "odog": $armorSkills["BleedResistance"]++; break;
            case "legi": $armorSkills["DivineBlessing"]++; break;
        }
    }

    function tally(){
        switch($userHead){
            case "odog": $armorSkills["BleedResistance"]++; break;
            case "legi": $armorSkills["DivineBlessing"]++; break;
        }
        switch($userChest){
            case "odog": $armorSkills["SpeedSharpening"]++; break;
            case "legi": $armorSkills["EvadeWindow"]++; break;
        }
        switch($userArms){
            case "odog": $armorSkills["Constitution"]++; break;
            case "legi": $armorSkills["Airborne"]++; break;
        }
        switch($userWaist){
            case "odog": $armorSkills["CriticalEye"]++; break;
            case "legi": $armorSkills["IceAttack"]++; break;
        }
        switch($userlegs){
            case "odog": $armorSkills["QuickSheathe"]++; break;
            case "legi": $armorSkills["IceResistance"]++; break;
        }
    }

?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MHW Toolkit: draft</title>

    </head>
    <body>

    <table class="dressup">
        <form method="GET">
            <tr>
            <td>
                Head:
                <select name="head">
                    <option value="leather">Leather</option>
                    <option value="odog">Odogaron</option>
                    <option value="legi">Legiana</option>
                </select>
                <?php //tallyHead(); ?>
            </td>
            <td>
                Chest:
                <select name="chest">
                    <option value="leather">Leather</option>
                    <option value="odog">Odogaron</option>
                    <option value="legi">Legiana</option>
                </select>
            </td>
            <td>
                Arms:
                <select name="arms">
                    <option value="leather">Leather</option>
                    <option value="odog">Odogaron</option>
                    <option value="legi">Legiana</option>
                </select>
            </td>
            <td>
                Waist:
                <select name="waist">
                    <option value="leather">Leather</option>
                    <option value="odog">Odogaron</option>
                    <option value="legi">Legiana</option>
                </select>
            </td>
            <td>
                Legs:
                <select name="legs">
                    <option value="leather">Leather</option>
                    <option value="odog">Odogaron</option>
                    <option value="legi">Legiana</option>
                </select>
            </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </form>
    </table>
    <br/>
    <br/>
    <table class="skillz">
        <th>Active Armor Skills</th>
        <tr>
            <?php
            /*
                foreach($skill as $armorSkills){
                    if ($skill > 0){
                        echo $skill . " +" . $armorSkills[$skill];
                    }
                }
            */
            ?>
        </tr>

    </table>

    </body>
</html>
