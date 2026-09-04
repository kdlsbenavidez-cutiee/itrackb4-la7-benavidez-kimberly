# ITRACKB4 - Laboratory Activity 3

## Skincare Products

This project is a simple Laravel application about skincare products.
It has a product list, detail pages, a featured product, and a filter
for the product categories.

## Routes

- `/skincare` - shows all skincare products.
- `/skincare/featured` - shows the featured product.
- `/skincare/{id}` - shows the details of a product.
- `/skincare/filter/{value}` - filters the products by category.
- `/skincare/filter` - shows all products when there is no filter.

## Questions

### 1. Why must `/skincare/featured` be placed before `/skincare/{id}`?

The featured route should be placed first because Laravel checks the
routes from top to bottom. If the `{id}` route comes first, Laravel
might read "featured" as an ID. Putting the featured route first makes
sure that the correct page will open.

### 2. What happens when a nonexistent ID is requested?

The controller checks if the ID exists in the skincare data. If it
does not exist, `abort(404)` is used. This will show a 404 Not Found
page instead of an error.

### 3. Why are named routes useful? What can break if we do not use them?

Named routes make it easier to create links because we can use the
route name instead of typing the URL directly. If the URL is changed
later, hard-coded links can stop working. Using named routes makes
the links easier to manage.

## Author

Kimberly Benavidez