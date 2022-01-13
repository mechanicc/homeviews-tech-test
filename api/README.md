# API Coding Challenge &nbsp; ![medium](https://img.shields.io/badge/-Medium-yellow) ![time](https://img.shields.io/badge/%E2%8F%B0-1h-blue)

&nbsp;
# Goals / Outcomes ✨
- Database migrations
- Use of MVC structure
- JSON api responses

&nbsp;
# Pre-requisites ✅
- Install project dependencies with composer

&nbsp;
# Requirements 📖
- The task does not require the use of authentication
- Add a listings json API to the project (in the json format)
    - Have a listing endpoint which allows you to view all the listings
    - Have a listing endpoint which allows you to view a single listing
    - Have a listing endpoint which allows you to create a listing
    - Have a listing endpoint which allows you to update an existing listing
    - Have a listing endpoint which allows you to delete a listing

&nbsp;
# Think about 💡
- How we should use pagination on the listings api endpoint
- Should data provided by the user bne validated
- How could an API endpoint be secured using authentication in future

&nbsp;
# What's Already Been Done 🏁
- Basic laravel app

&nbsp;
# Schema 

```json
{
  "id": 123,
  "name": "Listing Name",
  "slug": "listing-name",
  "address_line_1": "123 Some Street",
  "address_town": "Some Town",
  "address_county": "Some County",
  "address_postal_code": "AB12 3CD",
  "address_country": "United Kingdom",
  "cost": 1200
}
```