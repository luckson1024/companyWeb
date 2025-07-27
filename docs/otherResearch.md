Observation:
The research confirms the need for a Headless CMS architecture. The key features for the admin side are:

Content Modeling: Ability to define the structure of different content types (e.g., a blog post has a title, body, author, and cover image).

Content Management: A user-friendly interface for non-technical users to perform CRUD (Create, Read, Update, Delete) operations on all content.

Media Library: A centralized repository for all assets (images, videos, documents).

API-First: A robust API (REST or GraphQL) to deliver content to the Next.js frontend.

Role-Based Access Control (RBAC): This is critical. Common roles include:

Super Admin: Full control over everything, including settings and user management.

Editor: Can create, edit, and publish content from any user.

Author/Contributor: Can create and manage their own content but cannot publish it (requires editor/admin approval).

Security: Data encryption, audit logs, and secure API endpoints.

Thought:
I now have all the necessary information. I've researched the public-facing features, the admin/CMS features, and the principles of RBAC. I can now synthesize this into a single, comprehensive prompt that follows the user's specifications. The prompt will be structured to guide a development team, starting with principles and then breaking down the project into logical modules. It will be detailed, actionable, and adhere to the specified technology stack and development methodology.

Final Prompt

Persona: You are a Lead Full-Stack Developer and Solution Architect. Your task is to interpret this project brief and create a development plan for your team.

Core Objective: Develop a robust, secure, and highly scalable company website system using a Headless CMS architecture. The system must be fully managed by an admin panel, support granular user roles, and provide an exceptional user experience on all devices.

1. Guiding Principles & Core Requirements

Technology Stack:

Frontend: Next.js (React Framework)

Backend (API & Admin Panel): PHP (preferably a modern framework like Laravel or Symfony)

Database: MySQL

Architecture: Headless CMS. The PHP backend will serve a RESTful API. The Next.js frontend will consume this API to render the website. The Admin Panel is part of the PHP application.

Design Philosophy: Mobile-First. All UI must be designed for mobile screens first and then scaled up to tablet and desktop.

Development Methodology: Frontend-First. Once the API contract (endpoints and data structures) is defined, the frontend team can build the UI with mock data while the backend team implements the API.

UI/UX: Component-Based Architecture. All UI elements (buttons, cards, forms, sections) must be built as reusable React components to ensure consistency and development speed.

2. Feature Breakdown: System Modules

The project is divided into three primary modules:

Module A: Public-Facing Website (Next.js Frontend)

This is the client-facing website that visitors will see. All content displayed here must be fetched from the PHP API.

A1. Global Components:

Header: Dynamic navigation menu (managed by admin), company logo, Call-to-Action (CTA) button (e.g., "Get a Quote").

Footer: Company info, quick links, social media icons, copyright notice.

Search Functionality: A global search bar that queries blog posts, services, and pages.

A2. Core Pages (with examples of reusable components):

Home Page:

Hero Section (editable headline, sub-headline, image/video background, CTA).

Services Overview Section (displays a summary of key services).

Testimonial Slider (pulls from a list of testimonials).

Featured Blog Posts Section.

About Us Page:

Company History/Mission Section.

"Meet the Team" Section (displays team member profiles).

Services / Products Pages:

A main listing page for all services/products.

Detailed individual pages for each service/product with rich text, image galleries, and specifications.

Blog:

Blog listing page with filtering by category and search.

Individual blog post pages with author bio, comments section (optional), and social sharing buttons.

Case Studies / Portfolio:

Listing page showcasing projects.

Detailed case study pages outlining challenges, solutions, and results.

Careers Page:

Lists open job positions with details and an "Apply Now" link/form.

Contact Us Page:

Contact form (submissions saved to the database and viewable in the admin panel).

Interactive map (e.g., Google Maps).

Address, email, and phone number.

FAQ Page:

Accordions for questions and answers, grouped by category.

A3. Technical Frontend Features:

SEO: Full support for dynamic meta titles, descriptions, and Open Graph tags on all pages.

Performance: Optimized for speed (image optimization, code splitting, static generation where possible with Next.js).

Analytics: Integration with an analytics tool like Google Analytics.

Module B: Admin Control Panel (PHP Backend)

This is the heart of the system, accessible only to authenticated users. It manages the entire website.

B1. Dashboard:

Provides an at-a-glance view of website activity (e.g., new contact form submissions, latest content).

B2. Content Management (Full CRUD for all content types):

Page Manager: A visual or block-based editor (e.g., WYSIWYG, TinyMCE, or a custom block editor) to build and edit the content of pages like Home, About Us, etc.

Blog Manager: Create, edit, and delete blog posts. Manage categories and tags.

Services/Products Manager: Add, update, and remove services or products.

Team Member Manager: Add/remove team members with their photo, title, and bio.

Testimonial Manager: Manage customer testimonials.

Job Posting Manager: Create and manage career opportunities.

Form Submissions Viewer: View and manage all entries from the contact form.

B3. Website Settings:

General Settings: Update site title, logo, contact information, social media links.

Navigation Menu Builder: A drag-and-drop interface to control the items in the main navigation menu.

SEO Settings: Set global SEO defaults and fallback metadata.

B4. Media Library:

A central location to upload, view, and delete all media files (images, PDFs, videos).

Module C: User & Role Management (PHP Backend)

This module implements the Role-Based Access Control (RBAC) system.

C1. User Management:

Super Admin can invite, create, update, and deactivate user accounts.

Assign roles to users.

C2. Role Definitions & Permissions:

Super Admin: Unrestricted access. Can manage users, roles, and all website settings and content.

Admin: Can manage all content and website settings, but cannot manage users or change fundamental system configurations.

Editor: Can create, edit, and publish content from any user. Can manage content categories. Cannot access website settings or user management.

Contributor/Author: Can create and edit their own content (e.g., blog posts), but cannot publish it. Their submissions must be reviewed and published by an Editor or Admin.

Feature / Action	Super Admin	Admin	Editor	Contributor
Manage Users & Roles	✅	❌	❌	❌
Manage Site Settings	✅	✅	❌	❌
Publish Any Content	✅	✅	✅	❌
Edit Any Content	✅	✅	✅	❌
Create/Edit Own Content	✅	✅	✅	✅
Manage Media Library	✅	✅	✅	Upload
3. API Contract (Initial Definition - RESTful)

The PHP backend must expose these key endpoints:

GET /api/pages/:slug: Fetches the content for a specific page.

GET /api/posts: Fetches a list of all blog posts (with pagination and filtering).

GET /api/posts/:slug: Fetches a single blog post.

GET /api/services: Fetches all services.

GET /api/settings: Fetches global site settings (logo, nav menu, etc.).

POST /api/contact-form: Submits the contact form.

All admin panel actions will be handled by secure, authenticated endpoints (e.g., /admin/posts/create).

4. Development Workflow

Phase 1 (Foundation):

Solidify the API contract and database schema.

Set up the basic PHP (Laravel/Symfony) backend project with API authentication (e.g., JWT or Sanctum).

Set up the Next.js project.

Phase 2 (Parallel Development):

Backend Team: Build out the Admin Panel, RBAC logic, and the REST API endpoints.

Frontend Team: Build the reusable UI component library and develop the public-facing pages using mock API data.

Phase 3 (Integration & Testing):

Connect the Next.js frontend to the live API.

Conduct thorough end-to-end testing of all features and user roles.

Deploy.

Google Search Suggestions
Display of Search Suggestions is required when using Grounding with Google Search. Learn more
features of a modern professional company website 2024
headless CMS features and role based access control (RBAC)


Of course. Here is a component-driven development plan that aligns frontend UI component creation directly with its corresponding backend development. Each phase is designed as a logical sprint, ensuring that for every UI element built, the necessary backend support is developed in parallel.

Development Plan: A Component-Driven Phased Approach

Guiding Principle: We build in vertical slices. Each feature slice consists of a UI Component (Next.js), a Backend Model (MySQL), an API Endpoint (PHP), and an Admin Management Interface (PHP).

Phase 0: Foundation & Core Setup (Sprint 0)

Objective: Establish the project architecture, development environments, and core systems before feature development begins. This phase is crucial for ensuring a smooth workflow in subsequent phases.

1. Project Initialization:

Frontend (Next.js):

Initialize a new Next.js project.

Set up folder structure for components, pages, lib, styles.

Integrate a CSS framework or solution (e.g., Tailwind CSS).

Backend (PHP/MySQL):

Initialize a new PHP project using a modern framework (e.g., Laravel or Symfony).

Configure database connection to MySQL.

Set up basic project structure for controllers, models, and routes.

2. UI Component Library Setup:

Frontend (Next.js):

Integrate Storybook. This creates an isolated environment to build, view, and test UI components.

Create foundational "design token" components: Colors, Typography (headings, paragraphs), Spacing.

Build basic atomic components in Storybook: Button, Input, Card, Tag.

3. Core Backend Systems:

Backend (PHP/MySQL):

User Authentication: Implement the database schema (users table) and API endpoints for user login/logout for the admin panel.

Role-Based Access Control (RBAC): Create roles and permissions tables. Implement the core logic to check a user's role and associated permissions. This will be a middleware applied to all admin routes.

API Contract Definition:

Establish API standards: RESTful principles, consistent JSON response structure (e.g., { "data": [...] } or { "error": "..." }), and versioning (/api/v1/...).

Implement API Authentication (e.g., Laravel Sanctum or JWT) to protect all admin-related endpoints.

Phase 1: Basic Content & Global Elements

Objective: Enable the most basic function: creating and displaying a simple content page and the website's global header and footer.

1. Generic Content Page:

UI Component (RichTextRenderer):

Develop a React component that takes a string of HTML or Markdown as a prop and safely renders it. This will be used for generic page content, blog posts, service descriptions, etc.

Backend & API:

Database: Create a pages table (id, title, slug, content, meta_title, meta_description).

Admin Panel: Build the "Pages" management section. This includes a list of all pages and a form with a WYSIWYG editor (like TinyMCE) to create/edit a page's title and content.

API: Create endpoint GET /api/v1/pages/:slug that retrieves a single page's data from the database.

2. Global Header & Footer:

UI Components (Header, Footer):

Build the static layout for the Header and Footer components.

The Header will contain a placeholder for a logo and a navigation menu.

The Footer will have placeholders for contact info, social links, and quick links.

Backend & API:

Database: Create a settings table (a key-value store) to hold site-wide configurations.

Admin Panel: Build a "General Settings" page where an admin can:

Upload a site_logo.

Define contact_email, phone_number, address.

Enter social_media_links (Facebook, Twitter, LinkedIn).

Build a "Navigation Manager" with a drag-and-drop interface to create and order the main menu links. The output is saved as a JSON array in the settings table.

API: Create endpoint GET /api/v1/settings that returns all key-value settings. The Next.js app will fetch this on build or load to populate the Header and Footer.

Phase 2: Structured Content - Blog & Services

Objective: Build functionality for recurring, structured content types like blog posts and services.

1. Blog System:

UI Components (PostCard, PostLayout, CategoryFilter):

PostCard: A reusable card to display a blog post's image, title, excerpt, and publication date. Used on the blog listing page.

PostLayout: The template for a single blog post page, including a feature image, title, content area (using the RichTextRenderer from Phase 1), author bio, and date.

Backend & API:

Database: Create posts (title, slug, content, excerpt, author_id, status), categories, and post_category (pivot) tables.

Admin Panel: Build the "Blog" management section. An Editor/Admin can perform full CRUD on posts and manage categories. A Contributor can only create/edit their own posts (status "draft").

API:

GET /api/v1/posts: Returns a paginated list of all published posts. Allow filtering by category (?category=...).

GET /api/v1/posts/:slug: Returns the data for a single published post.

2. Services System:

UI Components (ServiceCard, ServiceLayout):

ServiceCard: A component to display a service's icon/image, name, and short description. Used on the main services page.

ServiceLayout: The template for a detailed service page.

Backend & API:

Database: Create a services table (name, slug, description, icon, image).

Admin Panel: Build the "Services" management section for full CRUD operations.

API:

GET /api/v1/services: Returns a list of all services.

GET /api/v1/services/:slug: Returns data for a single service.

Phase 3: Building Social Proof & Trust

Objective: Add components and functionality that build visitor trust.

1. Testimonials:

UI Components (TestimonialCard, TestimonialSlider):

TestimonialCard: Displays the quote, author's name, and their company/title.

TestimonialSlider: A carousel component that displays multiple TestimonialCards.

Backend & API:

Database: Create testimonials table (quote, author_name, author_title, is_featured).

Admin Panel: Build a "Testimonials" management section for full CRUD.

API: GET /api/v1/testimonials?featured=true: Returns a list of testimonials to be displayed on the home page.

2. Team Members:

UI Component (TeamMemberCard):

Displays a team member's photo, name, title/role, and a short bio.

Backend & API:

Database: Create team_members table (name, title, bio, photo_url).

Admin Panel: Build a "Team" management section.

API: GET /api/v1/team: Returns a list of all team members.

Phase 4: User Interaction & Finalization

Objective: Implement features for user interaction and finalize the core product.

1. Contact Form & Lead Generation:

UI Component (ContactForm):

A standard form with fields (Name, Email, Message), client-side validation, and submission state (loading, success, error).

Backend & API:

Database: Create a form_submissions table (name, email, message, submitted_at).

Admin Panel: Build a "Submissions" viewer. This is a read-only interface to view all contact form entries, sortable by date.

API: POST /api/v1/contact-form: Receives form data, validates it, and saves it to the database. Can also be configured to send an email notification.

2. Site Search:

UI Component (SearchBar):

An input field that, on submission, navigates to a search results page.

Backend & API:

Backend Logic: This is more complex. No new database table is needed.

Admin Panel: No new UI needed.

API: GET /api/v1/search?q=...: Create a search endpoint in PHP that queries the posts, services, and pages tables (using LIKE %query%) and returns a consolidated list of results, each with a type and a link.

3. Final Review & Deployment:

Tasks:

End-to-end testing of all user roles and permissions.

Final SEO check (Meta tags, sitemap generation).

Performance optimization (image compression, caching strategies).

Prepare deployment scripts and environments.

Deploy!

Excellent! Let's break this down into a clear folder structure and a detailed, phased ToDo list. This will serve as our master plan for development, ensuring that frontend and backend work remains perfectly synchronized.

Recommended Folder Structure

This structure separates the frontend and backend concerns cleanly, which is a best practice for headless architectures.

Generated plaintext
/your-company-website/
├── backend/                 # PHP (Laravel/Symfony) Project
│   ├── app/
│   │   ├── Http/
│   │   │   ├── Controllers/
│   │   │   │   ├── Admin/      # Controllers for the Admin Panel UI
│   │   │   │   │   ├── DashboardController.php
│   │   │   │   │   ├── PostController.php
│   │   │   │   │   └── SettingsController.php
│   │   │   │   └── Api/V1/     # Versioned API controllers for Next.js
│   │   │   │       ├── PageController.php
│   │   │   │       ├── PostController.php
│   │   │   │       └── SettingsController.php
│   │   │   ├── Middleware/
│   │   │   │   ├── Authenticate.php
│   │   │   │   └── CheckRolePermission.php # For RBAC
│   │   ├── Models/
│   │   │   ├── User.php
│   │   │   ├── Post.php
│   │   │   ├── Page.php
│   │   │   ├── Service.php
│   │   │   ├── Testimonial.php
│   │   │   └── Role.php
│   ├── database/
│   │   ├── migrations/       # All database table definitions
│   │   └── seeders/          # To create default roles and Super Admin user
│   ├── resources/
│   │   └── views/
│   │       └── admin/          # Blade templates for the Admin Panel
│   │           ├── layouts/
│   │           ├── posts/
│   │           └── settings/
│   └── routes/
│       ├── api.php           # Defines all `/api/v1/*` routes
│       └── web.php           # Defines all `/admin/*` routes
│
└── frontend/                # Next.js Project
    ├── app/
    │   ├── (public)/         # Route group for all public-facing pages
    │   │   ├── about/
    │   │   │   └── page.tsx
    │   │   ├── blog/
    │   │   │   ├── [slug]/
    │   │   │   │   └── page.tsx
    │   │   │   └── page.tsx
    │   │   ├── layout.tsx    # Public layout with Header & Footer
    │   │   └── page.tsx      # Home page
    │   ├── api/              # Next.js API routes (if needed for BFF pattern)
    │   └── layout.tsx        # Root layout
    ├── components/
    │   ├── ui/               # 1. Atomic, reusable UI elements (Shadcn-style)
    │   │   ├── Button.tsx
    │   │   ├── Card.tsx
    │   │   ├── Input.tsx
    │   │   └── Heading.tsx
    │   ├── layout/           # 2. Structural components
    │   │   ├── Header.tsx
    │   │   ├── Footer.tsx
    │   │   └── PageWrapper.tsx
    │   ├── features/         # 3. Complex components tied to a feature
    │   │   ├── blog/
    │   │   │   └── PostCard.tsx
    │   │   ├── testimonials/
    │   │   │   └── TestimonialSlider.tsx
    │   │   └── services/
    │   │       └── ServiceList.tsx
    │   └── forms/
    │       └── ContactForm.tsx
    ├── lib/                  # Helper functions, API client, type definitions
    │   ├── api.ts            # Central API fetching logic
    │   └── types.ts          # TypeScript interfaces (Post, User, etc.)
    ├── public/               # Static assets (images, fonts, favicons)
    └── styles/               # Global styles, Tailwind config

Master ToDo List: A Phased Implementation Plan

Here is a comprehensive checklist broken down by development phase.

Key: [FE] = Frontend, [BE] = Backend, [DB] = Database, [OPS] = Operations/DevOps

Phase 0: Foundation & Core Setup

[OPS] Project Setup:

Create root project directory with frontend and backend subdirectories.

Initialize Git repository.

[FE] Run npx create-next-app@latest in frontend.

[BE] Run composer create-project laravel/laravel (or Symfony equivalent) in backend.

Configure local development environment (e.g., Docker, Laragon, Herd).

[DB] Database & User System:

Create the users, roles, and permissions tables via migrations.

Define relationships between Users and Roles.

Create a seeder to populate default roles (Super Admin, Admin, Editor, Contributor) and a Super Admin user.

[BE] Core Backend Logic:

Implement API authentication (Laravel Sanctum is a great choice).

Implement admin panel authentication (web sessions).

Create the CheckRolePermission middleware to protect routes based on user role.

[FE] Frontend Foundation:

Install and configure Tailwind CSS.

Set up components/ui directory for atomic components.

Build initial UI components: Button, Card, Input, Heading.

Set up lib/api.ts with a base fetch client for making calls to the PHP backend.

Phase 1: Global Elements & Basic Pages

[DB] Schema:

Create pages migration (title, slug, content, SEO fields).

Create settings migration (key-value table).

[BE] Admin Panel & API:

Build "Pages" CRUD in the admin panel with a WYSIWYG editor.

Build "General Settings" page in admin to manage logo, contact info, and social links.

Build "Navigation Manager" in admin to control header links.

Create API endpoint: GET /api/v1/pages/:slug.

Create API endpoint: GET /api/v1/settings.

[FE] UI Components & Pages:

Build Header.tsx and Footer.tsx components.

Header.tsx to fetch and render navigation links from the settings API.

Footer.tsx to fetch and render contact/social info from the settings API.

Create a dynamic page route app/(public)/[slug]/page.tsx to render content from the pages API endpoint.

Phase 2: Structured Content (Blog & Services)

[DB] Schema:

Create posts, categories, and post_category migrations.

Create services migration.

[BE] Admin Panel & API:

Build "Blog" CRUD in admin, including category management. Enforce RBAC (Contributors can't publish).

Build "Services" CRUD in admin.

Create API endpoint: GET /api/v1/posts (with pagination and category filtering).

Create API endpoint: GET /api/v1/posts/:slug.

Create API endpoint: GET /api/v1/services.

[FE] UI Components & Pages:

Build PostCard.tsx component for blog listings.

Build the blog listing page (/blog) that fetches and displays posts.

Build the single post page (/blog/[slug]).

Build ServiceCard.tsx and the services listing page.

Phase 3: Building Social Proof

[DB] Schema:

Create testimonials migration.

Create team_members migration.

[BE] Admin Panel & API:

Build "Testimonials" CRUD in admin panel.

Build "Team Members" CRUD in admin panel.

Create API endpoint: GET /api/v1/testimonials.

Create API endpoint: GET /api/v1/team.

[FE] UI Components & Pages:

Build TestimonialCard.tsx and TestimonialSlider.tsx components.

Integrate the testimonial slider into the Home page.

Build TeamMemberCard.tsx and integrate it into the "About Us" page.

Phase 4: User Interaction & Finalization

[DB] Schema:

Create form_submissions migration.

[BE] Admin Panel & API:

Build a "Submissions" viewer in the admin panel (read-only).

Create API endpoint: POST /api/v1/contact-form with server-side validation.

Implement the GET /api/v1/search?q= endpoint to query multiple models.

[FE] UI Components & Pages:

Build the ContactForm.tsx component with client-side validation.

Integrate the form into the /contact page.

Build the global SearchBar.tsx component and the search results page.

Phase 5: Deployment & Go-Live

[OPS] Infrastructure:

Provision production server/hosting (e.g., Vercel for Frontend, DigitalOcean/Forge for Backend).

Set up production database and configure environment variables.

[FE] [BE] Final Checks:

Conduct end-to-end testing across all features and roles.

Perform a final SEO audit (meta tags, sitemap.xml, robots.txt).

Run performance and accessibility audits (Lighthouse).

Set up automated backups for the database.

Launch!

Deploy the backend.

Deploy the frontend.

Monitor for any initial issues.

This comprehensive plan gives your team a clear, step-by-step path to success. Let's get building—this is going to be a fantastic and robust system