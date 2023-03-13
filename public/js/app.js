// Import jQuery
import $ from 'jquery';

// Wait for document to be ready
$(document).ready(function() {
    // Listen for click on delete button
    $('.btn-delete').click(function() {
        // Get the ID of the employee to delete
        var employeeId = $(this).data('id');

        // Send DELETE request to server
        $.ajax({
            url: '/employees/' + employeeId,
            method: 'DELETE',
            success: function(response) {
                // Reload the page to update the table
                location.reload();
            },
            error: function(xhr, status, error) {
                // Display error message
                alert('An error occurred while deleting the employee.');
            }
        });
    });

    // Listen for submit on create/edit form
    $('#employeeForm').submit(function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Get form data
        var formData = new FormData(this);

        // Send POST/PUT request to server
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Redirect to employee list on success
                window.location.href = '/employees';
            },
            error: function(xhr, status, error) {
                // Display error message
                alert('An error occurred while saving the employee.');
            }
        });
    });
});
