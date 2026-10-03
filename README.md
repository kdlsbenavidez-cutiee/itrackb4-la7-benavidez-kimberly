# ITRACKB4 LA7 - Skincare Products

## Q1. What is the difference between POST and GET, and what happens when you refresh after a POST?

GET is used when we want to request or view a page, while POST is used when we send data from a form. In this activity, the form uses POST because we are sending a new skincare product to the controller. After the product is saved, the controller redirects to the skincare list. This prevents the browser from submitting the same POST again when the page is refreshed.

## Q2. What happens when validation fails, and why does the save code not run?

When validation fails, Laravel returns the user to the form and shows the errors. The values that were entered can still be shown using old(). The save part of the store method is not reached because the validation did not pass. This prevents an invalid record from being saved to the JSON file.

## Q3. Why does the success message appear once even though the layout is shown on every page?

The success message is stored as a session flash message after the product is saved. The layout checks the session and displays the message when it is available. After it is read, the flash message is removed from the session. That is why the message can appear once even though the layout is used on every page.

## Author

Kimberly Benavidez
