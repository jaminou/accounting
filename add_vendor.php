<?php
include 'connect.php'; // Include the database connection script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $companyName = $_POST["companyName"];
    $category = $_POST["category"];
    $title = $_POST["title"];   
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $reference = $_POST["reference"];
    $accountTerm = $_POST["accountTerm"];

    // Insert data into the database
    $sql = "INSERT INTO Vendor (CompanyName, Category, Title, FirstName, LastName, Address, City, State, Zipcode, Phone, Email, Website, Reference, AccountTerm)
            VALUES ('$companyName','$category', '$title', '$firstName', '$lastName', '$address', '$city', '$state', '$zipcode', '$phone', '$email', '$website', '$reference', '$accountTerm')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the form to clear fields
        header("Location: add_vendor_form.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>