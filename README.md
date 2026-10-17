# ITRACKB4 LA9: Skincare Products

## F1. Nullable column
The nullable column is `price` in my `skincares` table. I chose it because some products, like new arrivals or items from other stores, may not have a confirmed price yet, while product, brand and category are always needed to identify a skincare product.


## F2. First step that failed
The first thing that failed was creating a record in Tinker before adding `$fillable`. The error said: "Add [product] to fillable property to allow mass assignment on [App\Models\Skincare]."

## F3. Why the pages still work without editing Blade
My Blade files read `$skincare`, `$category`, `$brand` and `$item`, so I made the controller pass those same variable names, now filled by `Skincare::all()` and `findOrFail()`. An Eloquent model can be read like an array (`$item['product']`), so the views never needed to know the data moved from JSON to the database.