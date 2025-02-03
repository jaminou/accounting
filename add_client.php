<?php
include 'connect.php'; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST["title"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $companyName = $_POST["companyName"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $priceLevel = $_POST["priceLevel"];
    $reference = $_POST["reference"];
    $accountTerm = $_POST["accountTerm"];

    // Insert data into the database
    $sql = "INSERT INTO Clients (Title, FirstName, LastName, CompanyName, Address, City, State, Zipcode, Phone, Email, PriceLevel, Reference, AccountTerm)
            VALUES ('$title', '$firstName', '$lastName', '$companyName', '$address', '$city', '$state', '$zipcode', '$phone', '$email', '$priceLevel', '$reference', '$accountTerm')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the form to clear fields
        header("Location: add_client_form.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>