# Exfestkuy
Web base app for EXFEST build with CodeIgniter

## Requirement
- PHP 5.6 or higher
- PostgreSQL 9.0 or higher
- Composer 1.9.0 or higher

## Database Migration
- Run migration
    - Makefile
        ```
        $ make migrate
        ```
    - PHP Native
        ```
        $ php index.php migration migrate
        ```

- Create migration
    - Makefile
        ```
        $ make migration name=your_migration_name
        ```
    - PHP Native
        ```
        $ php index.php migration create your_migration_name
        ```
