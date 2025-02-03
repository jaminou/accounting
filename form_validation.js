// Function to capitalize the first letter of a string
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1).toLowerCase();
}

// Function to toggle the visibility of the new category input field
function toggleNewCategory(select) {
    const newCategoryInput = document.getElementById("newCategory");
    if (select.value === "Other") {
        newCategoryInput.style.display = "block";
    } else {
        newCategoryInput.style.display = "none";
    }
}

// Function to validate the form before submission
function validateForm() {
    // Capitalize the first letter of all text inputs
    const textInputs = document.querySelectorAll("input[type='text'], textarea");
    textInputs.forEach(input => {
        input.value = capitalizeFirstLetter(input.value.trim());
    });

    // Handle the new category input
    const categorySelect = document.getElementById("category");
    const newCategoryInput = document.getElementById("newCategory");
    if (categorySelect.value === "Other" && newCategoryInput.value.trim() === "") {
        alert("Please enter a new category.");
        newCategoryInput.focus();
        return false;
    }

    function formatAddress(address) {
    const parts = address.split(',').map(part => part.trim());
    const formattedParts = parts.map(part => {
        return part
            .split(' ')
            .map(word => {
                // Capitalize the first letter of each word
                if (word.length > 0) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }
                return word;
            })
            .join(' ')
            .replace(/St\b/g, 'Street') // Replace "St" with "Street"
            .replace(/Apt\b/g, 'Apt'); // Replace "Apt" with "Apt"
    });
    return formattedParts.join(', ');
}

// Example usage
const address = "123 main st, apt 10";
console.log(formatAddress(address)); // Output: "123 Main Street, Apt 10"

    return true; // Allow form submission
}