<?php
    include (__DIR__ . "/db.php");

    function addPatients ($fName, $lName, $isMarried, $birthday) {
        global $db;

        $results = [];

        $stmt = $db->prepare("INSERT INTO patients (patientFirstName, patientLastName, patientBirthDate, patientMarried) VALUES ('{$fName}', '{$lName}', '{$birthday}', '{$isMarried}')");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = "Data Added";
        }

        return ($results);
    }

    function updatePatients ($patientId, $fName, $lName, $isMarried, $birthday) {
        global $db;

        $results = [];

        $stmt = $db->prepare("UPDATE patients SET patientFirstName = '{$fName}', patientLastName = '{$lName}', patientBirthDate = '{$birthday}', patientMarried = '{$isMarried}' WHERE id = '{$patientId}'");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = "Data Updated";
        }

        return ($results);
    }

    function delPatients ($id) {
        global $db;

        $results = [];

        $stmt = $db->prepare("DELETE FROM patients WHERE id = {$id}");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = "Data Removed";
        }

        return ($results);
    }

    function getPatients () {
        global $db;

        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientBirthDate, patientMarried FROM patients ORDER BY patientLastName");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return ($results);
    }
?>