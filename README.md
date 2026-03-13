# Laravel Starter Kit(s)

This is Frankestein version of Nuno's and Josh's Starter Kits. They both have modern approach to working with Laravel using Ai and passion for coding. And good videos of it. I studyed their configs and tryed to combine best parts. Nuno's configs are more mild and balanced while Josh's have quircs for him. Well 100% Test coverage, is it balanced :) ?

I have Laravel 12, Livewire 4, Flux (free). I was supposed to use HTMX, but we see what we will need. My frontpage's Theme is helped by Claude and have Styleinctructions for more.  

---

It is great to be back after the long break from PHP and Laravel and continue that journey with modern tools and frameworks.



---

### Nuno Maduros Starter Kits
- Blade version: **[github.com/nunomaduro/laravel-starter-kit](https://github.com/nunomaduro/laravel-starter-kit)**
- Inertia & React version: **[github.com/nunomaduro/laravel-starter-kit-inertia-react](https://github.com/nunomaduro/laravel-starter-kit-inertia-react)**

### Josh Cirrer Starter Kit
- Fission: **[github.com/joshcirre/fission](https://github.com/joshcirrer/fission)**


**Laravel Starter Kit** is an ultra-strict, type-safe [Laravel](https://laravel.com) skeleton engineered for developers who refuse to compromise on code quality. This opinionated starter kit enforces rigorous development standards through meticulous tooling configuration and architectural decisions that prioritize type safety, immutability, and fail-fast principles.

## Why This Starter Kit?

Modern PHP has evolved into a mature, type-safe language, yet many Laravel projects still operate with loose conventions and optional typing. This starter kit changes that paradigm by enforcing:

- **100% Type Coverage**: Every method, property, and parameter is explicitly typed
- **Zero Tolerance for Code Smells**: Rector and PHPStan at maximum strictness catch issues before they become bugs
- **Immutable-First Architecture**: Data structures favor immutability to prevent unexpected mutations
- **Fail-Fast Philosophy**: Errors are caught at compile-time, not runtime
- **Automated Code Quality**: Pre-configured tools ensure consistent, pristine code across your entire team
- **Bun-Powered**: Leveraging Bun for blazing-fast dependency management...
- **Just Better Laravel Defaults**: Thanks to **[Essentials](https://github.com/nunomaduro/essentials)** / strict models, auto eager loading, immutable dates, and more...

This isn't just another Laravel boilerplate—it's a statement that PHP applications can and should be built with the same rigor as strongly-typed languages like Rust or TypeScript.

## Getting Started

> **Requires [PHP 8.4+](https://php.net/releases/)**, and [Bun](https://bun.sh).

Create your type-safe Laravel application using [Composer](https://getcomposer.org):

```bash
composer create-project XXX-starter-kit --prefer-dist example-app
```

### Initial Setup

Navigate to your project and complete the setup:

```bash
cd example-app

# Setup project
composer setup

# Start the development server
composer dev
```


## License

**Laravel Starter Kit** was created by **[Nuno Maduro](https://x.com/enunomaduro)** under the **[MIT license](https://opensource.org/licenses/MIT)**.

**Fission Starter Kit** was created by **[Josh Cirre](https://x.com/joshcirre)** under the **[MIT license](https://opensource.org/licenses/MIT)**.

**My Starter Kit** was created by **[Juha Halmu](https://bsky.app/profile/juhahalmu.fi)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
