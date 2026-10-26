# PHP & Symfony Bootcamp — Learning Roadmap

> A free, practice-first path from PHP fundamentals to independent Symfony application development.

## Table of Contents

- [How to Use This Roadmap](#how-to-use-this-roadmap)
- [Progress Overview](#progress-overview)
- [Phase 01 — PHP Fundamentals](#phase-01--php-fundamentals)
- [Phase 02 — Intermediate PHP](#phase-02--intermediate-php)
- [Phase 03 — Object-Oriented PHP](#phase-03--object-oriented-php)
- [Phase 04 — Modern PHP & Composer](#phase-04--modern-php--composer)
- [Phase 05 — Web Development Fundamentals](#phase-05--web-development-fundamentals)
- [Phase 06 — Databases & SQL](#phase-06--databases--sql)
- [Phase 07 — Symfony Fundamentals](#phase-07--symfony-fundamentals)
- [Phase 08 — Twig Templates & Components](#phase-08--twig-templates--components)
- [Phase 09 — Doctrine ORM & Database Relationships](#phase-09--doctrine-orm--database-relationships)
- [Phase 10 — Complete Symfony Applications](#phase-10--complete-symfony-applications)
- [Phase 11 — Advanced Symfony](#phase-11--advanced-symfony)
- [Phase 12 — Independent Development](#phase-12--independent-development)
- [Phase Completion Criteria](#phase-completion-criteria)
- [Free Reference Library](#free-reference-library)

---

## How to Use This Roadmap

The objective is to **build software independently**, not to finish tutorials quickly.

- **Fundamentals first:** Learn PHP, HTTP, and SQL before depending on Symfony abstractions.
- **One concept at a time:** Work through a brief explanation, a focused exercise, and active recall.
- **Practice before solutions:** Attempt challenges independently; request hints when needed.
- **Build continuously:** Apply new concepts to the evolving Book Manager project.
- **Demonstrate proficiency:** Complete the phase project and review code before advancing.
- **No deadlines:** Progress is based on understanding, not speed.

Each lesson follows **Learn → Practice → Recall → Apply → Review**. Check a lesson off only after completing its exercise and explaining the central concept in your own words. Independent challenges are opportunities to solve problems without line-by-line instructions; using official documentation is encouraged.

`ROADMAP.md` tracks learning progress. GitHub Issues track substantive work, such as curriculum changes, development environment setup, or application features. Not every lesson needs its own issue or pull request.

### Technology and scope

The learning workstation uses Ubuntu 26.04 LTS, PHP 8.5, Nginx, PHP-FPM, MySQL 8.4, Composer, VS Code, Xdebug, Git, and GitHub CLI. The framework track targets **Symfony 7.4 LTS**, with Twig and Doctrine introduced only when their phases begin. Symfony CLI setup is tracked separately; **no Symfony application is required during PHP fundamentals**.

The Book Manager is a learning project inspired by ThingsBook; it is not a requirement to reproduce another application's design or feature set. Feature lists are intentions, not fixed deadlines.

## Progress Overview

| Phase | Subject | Status |
|---|---|---|
| 01 | PHP Fundamentals | In Progress — 01.01–01.05 completed |
| 02 | Intermediate PHP | Not Started |
| 03 | Object-Oriented PHP | Not Started |
| 04 | Modern PHP & Composer | Not Started |
| 05 | Web Development Fundamentals | Not Started |
| 06 | Databases & SQL | Not Started |
| 07 | Symfony Fundamentals | Not Started |
| 08 | Twig Templates & Components | Not Started |
| 09 | Doctrine ORM & Database Relationships | Not Started |
| 10 | Complete Symfony Applications | Not Started |
| 11 | Advanced Symfony | Not Started |
| 12 | Independent Development | Not Started |

**Next lesson:** 01.06 — Loops & Iteration.

---

## Phase 01 — PHP Fundamentals

**Goal:** Read and write small PHP programs using values, control flow, arrays, functions, and basic validation.

### Lessons

- [x] 01.01 — PHP Syntax, Variables & Output
- [x] 01.02 — Data Types & Type Conversion
- [x] 01.03 — Operators & Expressions
- [x] 01.04 — Conditional Statements
- [x] 01.05 — Match Expressions
- [x] 01.06 — Loops & Iteration
- [ ] 01.07 — Indexed Arrays
- [ ] 01.08 — Associative Arrays
- [ ] 01.09 — Multidimensional Arrays
- [ ] 01.10 — Functions & Parameters
- [ ] 01.11 — Return Values & Scope
- [ ] 01.12 — Working with Strings
- [ ] 01.13 — Working with Numbers
- [ ] 01.14 — Basic Input Validation

### Practice and assessment

- Process a reading list using loops and arrays.
- Calculate reading progress and select appropriate reading statuses.
- Write functions that display, search, and summarize books.
- Validate page counts and other user-provided values.
- **Independent challenge:** Given a list of books, display only those currently being read, without a provided solution.

**Project checkpoint — Book Manager v0.1: Console Prototype.** Create a PHP program that stores a collection of books in memory, displays book information, tracks reading progress, and uses functions to organize its behavior.

**Ready to advance when:** You can explain your conditions, loops, arrays, and functions; complete the independent challenge; and demonstrate the console prototype working.

**Free references:** [PHP language reference](https://www.php.net/manual/en/langref.php), [PHP control structures](https://www.php.net/manual/en/language.control-structures.php).

---

## Phase 02 — Intermediate PHP

**Goal:** Handle persistent data, errors, requests, and application state safely using plain PHP.

### Lessons

- [ ] 02.01 — Variable Scope & Constants
- [ ] 02.02 — Errors, Exceptions & Defensive Programming
- [ ] 02.03 — Reading & Writing Files
- [ ] 02.04 — JSON Encoding & Decoding
- [ ] 02.05 — Dates, Times & Time Zones
- [ ] 02.06 — Superglobals
- [ ] 02.07 — Form Data & Request Handling
- [ ] 02.08 — Sessions & Cookies
- [ ] 02.09 — Splitting Code Across Files
- [ ] 02.10 — Basic Input Safety & Error Reporting

### Practice and assessment

- Save a list of books to JSON and reload it after restarting the program.
- Handle a missing file or malformed JSON without crashing unexpectedly.
- Distinguish trusted internal data from untrusted user input.
- **Independent challenge:** Recover gracefully from invalid saved data and explain the chosen behavior.

**Project checkpoint — Book Manager v0.2: Persistent Data.** Extend the console application with JSON storage, explicit error handling, and reusable PHP files.

**Ready to advance when:** You can trace a file read/write cycle, explain failure paths, and demonstrate that saved book information persists.

**Free reference:** [PHP Manual](https://www.php.net/manual/en/).

---

## Phase 03 — Object-Oriented PHP

**Goal:** Organize application behavior with well-scoped classes and clear responsibilities.

### Lessons

- [ ] 03.01 — Classes & Objects
- [ ] 03.02 — Properties & Methods
- [ ] 03.03 — Constructors
- [ ] 03.04 — Visibility & Encapsulation
- [ ] 03.05 — Type Declarations & Return Types
- [ ] 03.06 — Inheritance & Composition
- [ ] 03.07 — Interfaces & Contracts
- [ ] 03.08 — Abstract Classes
- [ ] 03.09 — Traits
- [ ] 03.10 — Namespaces

### Practice and assessment

- Model a `Book` with validated page count and reading progress.
- Give a `Library` responsibility for managing its collection.
- Compare composition with inheritance and justify a design choice.
- **Independent challenge:** Add a new book-related behavior without turning one class into a catch-all.

**Project checkpoint — Book Manager v0.3: Object-Oriented Refactor.** Refactor the existing logic into small, testable classes while preserving functionality.

**Ready to advance when:** You can explain each class's responsibility and use interfaces, inheritance, or composition for a clear reason rather than by habit.

**Free reference:** [PHP classes and objects](https://www.php.net/manual/en/language.oop5.php).

---

## Phase 04 — Modern PHP & Composer

**Goal:** Structure PHP projects with contemporary language features, dependency management, and automated tests.

### Lessons

- [ ] 04.01 — Composer Fundamentals
- [ ] 04.02 — `composer.json` & `composer.lock`
- [ ] 04.03 — PSR Coding Standards
- [ ] 04.04 — PSR-4 Autoloading
- [ ] 04.05 — Modern PHP Features (Enums, Attributes & Readonly)
- [ ] 04.06 — Dependency Injection Principles
- [ ] 04.07 — PHPUnit Fundamentals
- [ ] 04.08 — Xdebug, Static Analysis & Formatting

### Practice and assessment

- Configure PSR-4 autoloading for Book Manager classes.
- Write focused tests for book progress and invalid input.
- Debug a failing test using breakpoints and variable inspection.
- **Independent challenge:** Add a small feature, its tests, and a clear Conventional Commit without step-by-step guidance.

**Project checkpoint — Book Manager v0.4: Structured PHP Application.** Introduce Composer, namespaces, automated tests, and a consistent code style.

**Ready to advance when:** You can install dependencies safely, explain what Composer locks, and run and debug tests.

**Free references:** [Composer documentation](https://getcomposer.org/doc/), [PHP-FIG standards](https://www.php-fig.org/psr/), [PHPUnit documentation](https://docs.phpunit.de/).

---

## Phase 05 — Web Development Fundamentals

**Goal:** Understand browser-to-server communication and build a small web interface without a framework.

### Lessons

- [ ] 05.01 — How the Web Works: Browser, Server & DNS
- [ ] 05.02 — HTTP Requests, Responses & Status Codes
- [ ] 05.03 — Semantic HTML
- [ ] 05.04 — CSS Fundamentals & Responsive Layout
- [ ] 05.05 — Rendering HTML with PHP
- [ ] 05.06 — Forms, GET & POST
- [ ] 05.07 — Validation & User Feedback
- [ ] 05.08 — Output Escaping, CSRF & Safe Handling
- [ ] 05.09 — Sessions, Cookies & Authentication Concepts
- [ ] 05.10 — Nginx, PHP-FPM & Web Debugging

### Practice and assessment

- Explain how a browser request reaches a PHP script through Nginx and PHP-FPM.
- Build accessible forms to view and add books.
- Display validation errors and escape user-generated text.
- **Independent challenge:** Diagnose an invalid form submission and provide useful feedback without exposing raw error details.

**Project checkpoint — Book Manager v0.5: First Web Interface.** Build simple pages and forms backed by the existing PHP application logic.

**Ready to advance when:** You can follow a request/response cycle, explain why escaping matters, and debug an HTTP request.

**Free references:** [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Web), [PHP web features](https://www.php.net/manual/en/features.php).

---

## Phase 06 — Databases & SQL

**Goal:** Work confidently with relational data and SQL before adopting an ORM.

### Lessons

- [ ] 06.01 — Relational Database Concepts
- [ ] 06.02 — Tables, Columns, Data Types & Constraints
- [ ] 06.03 — Primary Keys, Foreign Keys & Referential Integrity
- [ ] 06.04 — `SELECT` & Projection
- [ ] 06.05 — `INSERT`, `UPDATE` & `DELETE`
- [ ] 06.06 — Filtering, Sorting, Aggregation & Joins
- [ ] 06.07 — Modeling One-to-Many & Many-to-Many Relationships
- [ ] 06.08 — PHP PDO & Database Connections
- [ ] 06.09 — Prepared Statements & Parameter Binding
- [ ] 06.10 — Transactions, Indexes & Query Basics
- [ ] 06.11 — Schema Changes, Backups & Restores

### Practice and assessment

- Design book, author, and review tables with appropriate keys.
- Write SQL queries before recreating their behavior in PHP.
- Use PDO with bound parameters rather than interpolating user input.
- Restore a disposable development database from a test backup.
- **Independent challenge:** Query books and their authors using a join, then explain why the result is correct.

**Project checkpoint — Book Manager v0.6: MySQL Persistence.** Replace JSON storage with **MySQL 8.4**, using the preconfigured `book_manager_dev` database and a restricted application account. SQLite remains optional for small experiments or isolated tests.

**Ready to advance when:** You can create and query a schema, explain relationships, safely modify data, and distinguish Git-managed schema code from private database contents and backups.

**Free references:** [MySQL 8.4 Manual](https://dev.mysql.com/doc/refman/8.4/en/), [PHP PDO](https://www.php.net/manual/en/book.pdo.php).

---

## Phase 07 — Symfony Fundamentals

**Goal:** Understand Symfony's request lifecycle, directory structure, configuration, and dependency injection.

### Lessons

- [ ] 07.01 — Symfony CLI, Requirements & Creating a Symfony 7.4 Application
- [ ] 07.02 — Project Layout, Flex Recipes & Composer Packages
- [ ] 07.03 — Symfony Console & `bin/console`
- [ ] 07.04 — Routing with PHP Attributes
- [ ] 07.05 — Controllers & Responses
- [ ] 07.06 — HttpFoundation Requests & the Request Lifecycle
- [ ] 07.07 — Configuration, Environments & Secrets
- [ ] 07.08 — Services, Autowiring & Dependency Injection
- [ ] 07.09 — Events, Listeners & Request Handling Concepts
- [ ] 07.10 — Validation & Error Handling Basics

### Practice and assessment

- Trace a browser request from its route to a controller response.
- Extract application logic into a service rather than placing it all in a controller.
- Use environment-specific configuration without committing credentials.
- **Independent challenge:** Add a book-related endpoint and explain which component does each job.

**Project checkpoint — Book Manager v0.7: Symfony Foundation.** Create the Symfony application when this phase begins and migrate selected existing functionality into routes, controllers, and services.

**Ready to advance when:** You can explain route matching, controller responsibilities, dependency injection, and application configuration in your own words.

**Free references:** [Symfony 7.4 documentation](https://symfony.com/doc/7.4/index.html), [Symfony setup](https://symfony.com/doc/7.4/setup.html).

---

## Phase 08 — Twig Templates & Components

**Goal:** Build maintainable, accessible server-rendered interfaces with Twig.

### Lessons

- [ ] 08.01 — Twig Syntax & Rendering Variables
- [ ] 08.02 — Escaping and Safe Output
- [ ] 08.03 — Conditionals, Loops & Filters
- [ ] 08.04 — Layouts, Blocks & Template Inheritance
- [ ] 08.05 — Includes, Macros & Reusable UI Patterns
- [ ] 08.06 — Symfony UX Twig Components (Optional Introduction)
- [ ] 08.07 — Forms & Symfony Form Basics
- [ ] 08.08 — Form Validation Errors & Feedback
- [ ] 08.09 — Static Assets, AssetMapper & Frontend Tooling Options
- [ ] 08.10 — Accessibility & Responsive Interfaces

### Practice and assessment

- Build shared navigation, page layouts, and book cards.
- Render form errors and user data safely.
- Explain when a simple include is sufficient and when a component is useful.
- **Independent challenge:** Implement a reading-progress display with reusable Twig templates.

**Project checkpoint — Book Manager v0.8: Twig Interface.** Create reusable, responsive book pages, forms, navigation, and progress displays.

**Ready to advance when:** You can build a Twig page without copying a full template and explain auto-escaping and form rendering.

**Free references:** [Twig documentation](https://twig.symfony.com/doc/), [Symfony Twig](https://symfony.com/doc/7.4/templates.html).

---

## Phase 09 — Doctrine ORM & Database Relationships

**Goal:** Use Doctrine while retaining a clear understanding of the SQL and schema underneath.

### Lessons

- [ ] 09.01 — Symfony Database Configuration & `DATABASE_URL`
- [ ] 09.02 — Doctrine Entities & Field Mapping
- [ ] 09.03 — Doctrine Migrations
- [ ] 09.04 — EntityManager & Persistence
- [ ] 09.05 — Repository Queries
- [ ] 09.06 — One-to-One & Many-to-One Associations
- [ ] 09.07 — One-to-Many & Many-to-Many Associations
- [ ] 09.08 — Fixtures & Test Data
- [ ] 09.09 — QueryBuilder, Pagination & Filtering
- [ ] 09.10 — Query Performance & Avoiding N+1 Queries

### Practice and assessment

- Map books, authors, reviews, and categories to a relational schema.
- Create and review migrations before applying them.
- Compare Doctrine operations with the SQL they generate.
- **Independent challenge:** Retrieve an author's books efficiently and explain the chosen association.

**Project checkpoint — Book Manager v0.9: Relational Data with Doctrine.** Model and persist books, authors, genres, reading sessions, reviews, and tags where they support planned features.

**Ready to advance when:** You can create entities, migrate a schema, write repository queries, and explain common association pitfalls.

**Free references:** [Symfony Doctrine integration](https://symfony.com/doc/7.4/doctrine.html), [Doctrine ORM](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html).

---

## Phase 10 — Complete Symfony Applications

**Goal:** Build a secure, tested, usable application from end to end.

### Lessons

- [ ] 10.01 — Authentication & Password Hashing
- [ ] 10.02 — Authorization, Roles & Voters
- [ ] 10.03 — Symfony Forms & Validation in Depth
- [ ] 10.04 — CSRF Protection, XSS Prevention & Secure Defaults
- [ ] 10.05 — File Uploads & Storage
- [ ] 10.06 — Search, Filters & Pagination
- [ ] 10.07 — Flash Messages & User Feedback
- [ ] 10.08 — Unit, Integration & Functional Tests
- [ ] 10.09 — Error Handling, Logging & Observability Basics
- [ ] 10.10 — Deployment Preparation & Environment Separation

### Practice and assessment

- Restrict private book data to its authorized user.
- Exercise successful and invalid form submissions through automated tests.
- Explain authentication versus authorization and recognize unsafe input handling.
- **Independent challenge:** Build, test, and review a complete book-management feature from a written issue.

**Project checkpoint — Book Manager v1.0: Complete Application.** Deliver usable book collection management, reading tracking, reviews, search, account security, and meaningful tests.

**Ready to advance when:** Critical user flows have tests, security-sensitive functionality is reviewed, and the application can be configured without exposing secrets.

**Free references:** [Symfony Security](https://symfony.com/doc/7.4/security.html), [Symfony Testing](https://symfony.com/doc/7.4/testing.html).

---

## Phase 11 — Advanced Symfony

**Goal:** Introduce advanced Symfony capabilities when a practical need justifies them.

### Lessons

- [ ] 11.01 — Service Container Design & Service Configuration
- [ ] 11.02 — Events, Subscribers & Decoupling
- [ ] 11.03 — Messenger: Messages, Handlers & Queues
- [ ] 11.04 — Scheduler & Background Work
- [ ] 11.05 — Cache Component & Performance
- [ ] 11.06 — JSON APIs & Serialization
- [ ] 11.07 — API Authentication & Authorization Concepts
- [ ] 11.08 — Mailer & Notifications
- [ ] 11.09 — Profiling, Logging & Query Optimization
- [ ] 11.10 — Refactoring, Architecture & Deployment Hardening

### Practice and assessment

- Identify a genuine need for a queue, scheduled job, cache, or event; avoid adding infrastructure without a use case.
- Profile a slow operation before optimizing it.
- **Independent challenge:** Implement one advanced capability and document its tradeoffs, tests, and failure modes.

**Project checkpoint — Book Manager v1.1: Selected Advanced Features.** Add only the advanced features that improve the application or teach an identified skill.

**Ready to advance when:** You can explain why the advanced feature was chosen, how it fails, and how it is tested or monitored.

**Free references:** [Symfony Messenger](https://symfony.com/doc/7.4/messenger.html), [Symfony documentation](https://symfony.com/doc/7.4/index.html).

---

## Phase 12 — Independent Development

**Goal:** Plan, implement, and explain an original PHP/Symfony application without a step-by-step tutorial.

### Milestones

- [ ] Identify an original application idea and intended users.
- [ ] Document functional and nonfunctional requirements.
- [ ] Break the project into meaningful GitHub issues.
- [ ] Design the data model and explain its relationships.
- [ ] Select an appropriate application architecture.
- [ ] Establish tests and basic development workflows.
- [ ] Implement features incrementally using focused branches and pull requests.
- [ ] Debug and refactor without depending on supplied solutions.
- [ ] Address security, accessibility, and performance basics.
- [ ] Prepare and test a reproducible deployment procedure.
- [ ] Document operation, configuration, and recovery steps.
- [ ] Demonstrate the finished application and explain key decisions.

**Final project — Independent Symfony Application.** Build an original application that demonstrates PHP, Symfony, Twig, Doctrine, SQL, testing, Git, and deployment fundamentals.

**Completion requirement:** Explain the design and tradeoffs, demonstrate core flows, run the tests, and reproduce the application from its repository and documented environment configuration.

---

## Phase Completion Criteria

A phase is complete only when:

1. Required lessons and practice exercises are completed.
2. The independent challenge is attempted and reviewed.
3. The project checkpoint runs and meets its documented acceptance criteria.
4. Code has been reviewed, tested where appropriate, and debugged when necessary.
5. `README.md` and `ROADMAP.md` reflect the actual state of the project.
6. Changes are saved with clear Conventional Commits; substantive work uses an issue, focused branch, and pull request where appropriate.
7. A completed phase is marked with an **annotated Git tag** on the relevant commit.

Example after completing Phase 01:

```bash
git tag -a phase-01 -m "Complete Phase 01: PHP Fundamentals"
git push origin phase-01
```

**Do not tag an incomplete phase.** The Symfony transition does not reset or invalidate previously completed PHP lessons.

## Free Reference Library

Primary sources used throughout the bootcamp:

| Subject | Reference |
|---|---|
| PHP | [Official PHP Manual](https://www.php.net/manual/en/) |
| Composer | [Composer Documentation](https://getcomposer.org/doc/) |
| PHP standards | [PHP-FIG PSRs](https://www.php-fig.org/psr/) |
| Web fundamentals | [MDN Web Docs](https://developer.mozilla.org/en-US/docs/Web) |
| MySQL | [MySQL 8.4 Reference Manual](https://dev.mysql.com/doc/refman/8.4/en/) |
| Symfony | [Symfony 7.4 Documentation](https://symfony.com/doc/7.4/index.html) |
| Twig | [Twig Documentation](https://twig.symfony.com/doc/) |
| Doctrine | [Doctrine ORM Documentation](https://www.doctrine-project.org/projects/doctrine-orm/en/current/index.html) |
| Testing | [PHPUnit Documentation](https://docs.phpunit.de/) |
| Git | [Git Documentation](https://git-scm.com/doc) |
| Debugging | [Xdebug Documentation](https://xdebug.org/docs/) |

The phase references are starting points, not assignments to read entire manuals. Specific free videos and tutorials can be curated in `docs/RESOURCES.md` as needed. Framework instructions should be checked against the **Symfony version actually used by the project**.

---

*Progress is measured by understanding, practice, and independent capability—not speed.*
