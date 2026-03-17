# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

SelfReminder is a Laravel 12 community platform for Muslim teenagers to gather, share knowledge, and remind each other about Islamic teachings.

## Key Commands

```bash
# Full project setup (first time)
composer run setup

# Development (starts server, queue, logs, and Vite concurrently)
composer run dev

# Build frontend assets
npm run build
npm run dev

# Run tests
php artisan test --compact
php artisan test --compact --filter=TestName   # run a specific test

# Lint / format code (run before finalizing changes)
vendor/bin/pint --dirty --format agent

# Lint + test together
composer test
```

## Tech Stack & Versions

- PHP 8.2+ / Laravel 12
- Livewire 4 + Flux UI Free v2 (official Livewire component library)
- Tailwind CSS 4
- Laravel Fortify (headless auth) + Sanctum (API tokens)
- Pest 4 / PHPUnit 12 (testing)
- Vite 7 (frontend build)
- SQLite (default DB, in-memory SQLite for tests)

## Architecture

### Authentication
Fortify handles all auth routes headlessly (login, register, password reset, email verification, 2FA). Sanctum handles API token auth. Middleware is configured in `bootstrap/app.php` — there is no `app/Http/Kernel.php` in Laravel 12.

### Routing
- `routes/web.php` — public home and authenticated dashboard
- `routes/settings.php` — settings pages (all Livewire, auth-gated)
- `routes/api.php` — REST API (Sanctum-protected + public user endpoints)

### Frontend
All reactive UI is built with Livewire components (`app/Livewire/`). Use `<flux:*>` components for all UI elements (buttons, forms, inputs, modals). Alpine.js for client-side interactions when needed. Views live in `resources/views/pages/`.

### API
API controllers live in `app/Http/Controllers/Api/`. Validation uses Form Request classes (`app/Http/Requests/`). The `UserController` follows a get-or-create pattern; follow this convention for new API endpoints.

## Code Conventions

- **PHP**: Use constructor property promotion, explicit return types on all methods, curly braces on all control structures. Use `Model::query()` over `DB::`. Use eager loading to prevent N+1 queries.
- **Validation**: Always use Form Request classes — never inline validation in controllers. Include custom error messages in the request class.
- **Configuration**: Never call `env()` outside config files; use `config('key')` everywhere else.
- **Routes**: Use named routes and the `route()` helper for link generation.
- **Models**: Define `casts()` as a method (not `$casts` property). Create factories and seeders when making new models.
- **Artisan**: Use `php artisan make:` to create new files; pass `--no-interaction` to all artisan commands.
- **Tests**: Every change needs a test. Create with `php artisan make:test --pest {Name}`. Most tests should be feature tests. Do NOT delete tests without approval.

## Important Constraints

- Do not create new top-level directories without approval.
- Do not change application dependencies without approval.
- Do not create documentation files unless explicitly requested.
- If frontend changes aren't visible, the user needs to run `npm run build` or `composer run dev`.
- When modifying a column in a migration, include ALL previously defined attributes on the column or they will be dropped.
