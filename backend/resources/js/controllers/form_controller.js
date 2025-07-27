import { Controller } from '@hotwired/stimulus';
import JustValidate from 'just-validate';

export default class extends Controller {
    connect() {
        this.validator = new JustValidate(this.element, {
            validateBeforeSubmitting: true,
            focusInvalidField: true,
            lockForm: true,
        });

        // Get all required fields
        const requiredFields = this.element.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            this.validator.addField(`#${field.id}`, [
                {
                    rule: 'required',
                    errorMessage: `${field.getAttribute('data-label') || field.name} is required`,
                }
            ]);

            // Add specific validation rules based on type
            if (field.type === 'email') {
                this.validator.addField(`#${field.id}`, [
                    {
                        rule: 'email',
                        errorMessage: 'Please enter a valid email address',
                    }
                ]);
            }

            if (field.type === 'password') {
                this.validator.addField(`#${field.id}`, [
                    {
                        rule: 'password',
                        errorMessage: 'Password must be at least 8 characters long and contain at least one number and one letter',
                    }
                ]);
            }

            // Add real-time validation
            field.addEventListener('blur', () => {
                this.validator.revalidateField(`#${field.id}`);
            });
        });

        // Handle form submission
            this.validator.onSuccess((event) => {
      const form = event.target;
      const submitButton = form.querySelector('button[type="submit"]');
      
      // Disable the submit button to prevent double submission
      if (submitButton) {
        submitButton.disabled = true;
      }

      // Submit the form
      form.submit();
    });
    }
}
