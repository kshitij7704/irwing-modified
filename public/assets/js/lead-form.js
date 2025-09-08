document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('my-form');
    let isSubmitting = false; // Prevent multiple submissions
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Prevent multiple submissions
            if (isSubmitting) {
                return;
            }
            
            isSubmitting = true;
            
            const formData = new FormData(form);
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...';
            submitButton.disabled = true;
            
            // Clear previous messages
            clearMessages();
            
            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showSuccess(data.message);
                    form.reset();
                    // Close modal after 2 seconds, then reload page
                    setTimeout(() => {
                        const modal = bootstrap.Modal.getInstance(document.getElementById('serviceModal'));
                        if (modal) {
                            modal.hide();
                        }
                        location.reload();
                    }, 2000);
                } else {
                    showError(data.message || 'An error occurred. Please try again.');
                    if (data.errors) {
                        showValidationErrors(data.errors);
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showError('An error occurred. Please try again.');
            })
            .finally(() => {
                // Reset button state
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                isSubmitting = false; // Allow new submissions
            });
        });
    }
    
    function showSuccess(message) {
        const successDiv = document.createElement('div');
        successDiv.className = 'alert alert-success mt-3';
        successDiv.innerHTML = `
            <i class="bi bi-check-circle-fill me-2"></i>
            ${message}
        `;
        form.appendChild(successDiv);
    }
    
    function showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'alert alert-danger mt-3';
        errorDiv.innerHTML = `
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            ${message}
        `;
        form.appendChild(errorDiv);
    }
    
    function showValidationErrors(errors) {
        Object.keys(errors).forEach(field => {
            const input = form.querySelector(`[name="${field}"]`);
            if (input) {
                input.classList.add('is-invalid');
                const errorDiv = document.createElement('div');
                errorDiv.className = 'invalid-feedback';
                errorDiv.textContent = errors[field][0];
                input.parentNode.appendChild(errorDiv);
            }
        });
    }
    
    function clearMessages() {
        // Remove previous alerts
        const alerts = form.querySelectorAll('.alert');
        alerts.forEach(alert => alert.remove());
        
        // Remove validation errors
        const invalidInputs = form.querySelectorAll('.is-invalid');
        invalidInputs.forEach(input => {
            input.classList.remove('is-invalid');
            const errorDiv = input.parentNode.querySelector('.invalid-feedback');
            if (errorDiv) {
                errorDiv.remove();
            }
        });
    }
}); 