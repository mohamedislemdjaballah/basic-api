# Let's Make a Basic GET Request

In the `api.php` file in the `routes` folder, let's make a GET request to get products, similar to what you see for the reviews.

Run `php artisan serve` and hit your endpoint, for example: `http://127.0.0.1:8000/api/reviews`.

You can always take a look at all the defined routes by running `php artisan route:list`.

If some routes are not displaying, run `php artisan route:clear` or make sure you correctly set the namespace for the controllers.

We won't handle things directly in the route but in the controllers, so let's make one.

Run `php artisan make:controller` and give a name to yours.

Select API or start fresh.

You can delete the unnecessary functions and keep the `show` or `index` methods.

Now you can handle the JSON response here.

Traits are useful, especially in our case, because the methods in them are reusable.

We can make a trait using the artisan command or by creating a new folder and a file.

Run `php artisan make:trait Traits\ApiResponse` or name it as you wish.

You will find an example code in the trait I added. I recommend making your own just to memorize things.
