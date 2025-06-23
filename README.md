# Card Component for Laravel Blade – Danielle Fence

[![Latest Version on Packagist](https://img.shields.io/packagist/v/daniellefence/card.svg?style=flat-square)](https://packagist.org/packages/daniellefence/card)
[![Total Downloads](https://img.shields.io/packagist/dt/daniellefence/card.svg?style=flat-square)](https://packagist.org/packages/daniellefence/card)
![GitHub Actions](https://github.com/daniellefence/card/actions/workflows/main.yml/badge.svg)

This package provides a robust, customizable Blade component for displaying project management cards, inspired by tools like Monday.com. Each card includes key metadata like status, milestone tracking, documentation, notes, and progress indicators, with a clean responsive layout and Alpine.js-powered interactive sections.

## Installation

You can install the package via Composer:

```bash
composer require daniellefence/card
```

## Usage

Use the `<x-df::card>` component to render a customizable project card in your Laravel Blade views. This component accepts direct props such as `title`, `image`, and `buttons`, and uses the default slot for the main content.

### Props:
- `title` (string) — Optional title displayed in the card header.
- `image` (string) — Optional image URL shown above the content.
- `buttons` (HTML string or Blade view) — Optional rendered HTML shown in the action footer.
- `slot` — The main content area inside the card body.

### Example

```blade
<x-df::card 
    title="Project Alpha" 
    image="/images/project.jpg" 
    :buttons="view('components.button-group', ['id' => 1])"
>
    <p>This is a sample project card body with custom content inside the slot.</p>
</x-df::card>
```

### Customization

To override styles or structure, publish the views using:

```bash
php artisan vendor:publish --tag=df-card-views
```

## Features

- Responsive card layout styled with Tailwind CSS
- Toggleable milestone, document, activity, and notes sections
- Inline progress indicator bar
- Built-in support for project data attributes

## Testing

Run the tests with:

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for recent updates.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for contribution guidelines.

## Security

If you discover any security-related issues, please email sbarron@daniellefence.net.

## Credits

- [Shane Barron](https://github.com/daniellefence)
- [All Contributors](../../contributors)

## License

Copyright © Danielle Fence and Outdoor Living.

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
