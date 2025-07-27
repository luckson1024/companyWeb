# Project Folder Structure

This document outlines the folder structure for the Company Profile Website project. The project follows a **monolithic modular architecture** based on Laravel.

The main goal is to separate concerns by feature, making the application easier to develop, maintain, and scale.

## Root Directory

```
/
├── backend/            # Laravel Project
├── docs/               # Project Documentation
└── FOLDER_STRUCTURE.md
```

## Backend (Laravel Project)

The `backend` directory will contain the Laravel application, with a dedicated `app/Modules` directory for each feature module.

```
backend/
├── app/
│   ├── Http/
│   ├── Models/
│   ├── Providers/
│   └── Modules/          # All feature modules reside here
│       ├── Auth/
│       ├── Blog/
│       ├── Career/
│       ├── Cms/
│       ├── Contact/
│       ├── Faq/
│       ├── Portfolio/
│       ├── Pricing/
│       ├── Product/
│       ├── Service/
│       ├── Settings/
│       ├── Team/
│       └── Testimonial/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
└── tests/
```

## Module Structure

Each module will follow a standard structure, containing its own controllers, models, services, repositories, routes, and views.

Example: `Blog` module structure.

```
app/Modules/Blog/
├── Http/
│   ├── Controllers/
│   │   ├── Api/
│   │   │   └── V1/
│   │   │       └── PostController.php
│   │   └── Admin/
│   │       ├── CategoryController.php
│   │       └── PostController.php
│   ├── Middleware/
│   └── Requests/
├── Models/
│   ├── Category.php
│   └── Post.php
├── Repositories/
│   ├── CategoryRepository.php
│   └── PostRepository.php
├── Routes/
│   ├── api.php
│   └── web.php
├── Services/
│   ├── CategoryService.php
│   └── PostService.php
└── Views/
    ├── Admin/
    │   ├── categories/
    │   └── posts/
    └── Public/
        ├── index.blade.php
        └── show.blade.php
```

This modular approach will be applied to all features outlined in the `FEATURE_ANALYSIS.md` document.