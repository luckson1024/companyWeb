# Auth Component Documentation

This document describes the authentication views and their components in our Laravel application.

## View Structure

```
resources/views/auth/
├── login.blade.php          # Login form
├── register.blade.php       # Registration form
├── verify.blade.php         # Email verification
└── passwords/
    ├── email.blade.php      # Password reset request
    ├── reset.blade.php      # Password reset form
    └── confirm.blade.php    # Password confirmation
```

## Components

### Login Form
- Email input with validation
- Password input with "show password" toggle
- Remember me checkbox
- Forgot password link
- Register link for new users
- CSRF protection

### Register Form
- Name input
- Email input with uniqueness validation
- Password input with strength requirements
- Password confirmation
- Terms acceptance checkbox
- Login link for existing users

### Password Reset
- Email input for reset request
- Token verification
- New password input with confirmation
- Success/error messaging

## Styling

All forms follow our design system:
- Clean, minimal layout
- Consistent spacing (8px/16px grid)
- Clear error states
- Responsive design for all screen sizes
- Accessible form controls

## Usage

Forms can be included in other views using:
```php
@include('auth.login')
@include('auth.register')
@include('auth.passwords.email')
@include('auth.passwords.reset')
```

## Security Features
- CSRF protection on all forms
- Rate limiting on submissions
- Password strength enforcement
- Email verification
- Session security
