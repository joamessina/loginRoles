
function toggleSubmitButton() {
    const checkbox = document.getElementById('confirmCheckbox');
    const submitButton = document.getElementById('submit-button');
    submitButton.disabled = !checkbox.checked;
}

document.addEventListener('DOMContentLoaded', function() {
    const checkbox = document.getElementById('confirmCheckbox');
    checkbox.addEventListener('change', toggleSubmitButton);
});
