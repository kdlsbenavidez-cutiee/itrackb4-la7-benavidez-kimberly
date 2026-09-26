# ITRACKB4 LA6 - Skincare Filters

## Q1. Why is it better to use one `/students` route with query strings instead of creating a new route for every filter?

Using one route makes the code simpler because we do not need to create a separate route for every filter. The query string can change the result while still using the same list page. It also makes it easier to use two filters together.

## Q2. If you used a route parameter for the course filter instead, what would the URL look like?

If I used a route parameter for the course filter, the URL could look like `/students/BSIT`. The BSIT value becomes part of the route path. Unlike a query string, the value is used as a route parameter.

## Q3. Which navigation case needed a pattern change, and why did the other case not need one?

The navigation link for the skincare section needed a pattern so it would stay active on the skincare list and detail pages. The other navigation case did not need the same pattern because its URL is only for one specific page. The `request()->is()` check is used to check the current path.

## Q4. Why did you delete the old filter method and Blade view but keep the empty `store()` and `update()` methods?

I deleted the old filter method and Blade view because the old filter was replaced by the query string filter. I kept the empty `store()` and `update()` methods because they are still part of the resource controller structure. They are unfinished methods and were not replaced by the new filter.

## Author

Kimberly Benavidez