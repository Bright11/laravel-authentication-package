## BrightWeb Authentication Package

Wecome to Brightweb Authentication package for Laravel! This package is designed to streamline the authentication process, providing robust middleware for securing both admin and user-specific routes, as well as customizable authentication views.

## Installation

To install the Brightweb Authentication package, simply use composer:

## composer require brightweb/authentication

## Migration

Make sure to run migration or rerun migration for users table to be updated with role.
php artisan migrate
if you have already done the above messioned use
php artisan migrate:fresh

## Middleware

This package comes with two built-in middleware 'admin' and 'user'.
These middleware can be used to secure different parts of your application based on user roles.

## Admin Middleware

To secure your admin pages, use the 'admin' middleware as shown below:
Route::middleware(['web', 'admin'])->group(function () {
// Your admin routes here
});

## User Middleware

To secure pages such as the cart page and user profile page, use th 'user' middleware as shown below:

Route::middleware(['web', 'user'])->group(function () {
// Your user routes here
});

## Custom Authentication Views

The package includes customizable authentication views that you can publish and modify to your application's design requirements. We call this feature 'authcss'.

## Publishing css

php artisan vendor:publish --tag=authcss

## Authentication URLS

This package provides predifined routes for registration,login and logout:
Register: '/register'
Login: '/login'
Logout: '/logout'
These routes are ready to use out of the box, simplifying the setup process.

## Conclusion

The Brightweb Authentication package offers a seamless and powerfull solution for managing authentication in your Laravel application.
With easy installation, robust security, middleware, and customizatable views, you can quickly set up a secure and user-frendly authentication system.
Get started today and take your Laravel applications authentication to the next level

## License

This package is open-sourced software licensed under the <a href='/https://opensource.org/license/'>MIT license</a>.

## Contributing

We welcome contributions to enhance this package.
Please contact us at <a href="mailto:chikanwazuo@gmail.com">Send email</a>

Thank you for choosing BrightWeb Authentication! If you have any questions or need support,
please feel free to open an issue on GitHub.
