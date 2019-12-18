## Project : Delivery date/times Problem

Project A 
---------
is an e-commerce platform that helps people to send gifts to their beloved ones
using a web/mobile applications solutions.
projectA.com : the website
admin.projectA.com : the administration panel of Project A
Project A operation team started delivery in 3 cities: Casa, Rabat and Tangier. in each city
we have a partner who is the supplier and the distributor of the gift products
Rabat: Mohamed (flowers, chocolate)
Casa: Hassan (flowers, perfumes, chocolate)
Tangier: Nada (flowers)
Each supplier has certain delivery dates/times during the year in which he can operate to
deliver gift orders to their receivers. We suppose that each city contains one partner, so that
delivery dates times can be related to City Domain.

<table>
    <tr>
        <td>Partner</td>
        <td>Delivery times working hours span</td>
    </tr>
    <tr>
        <td>Mohamed</td>
        <td>“9->12”, “14->18”</td>
    </tr>
    <tr>
        <td>Hassan</td>
        <td>“10->13”, “15->19”</td>
    </tr>
    <tr>
        <td>Nada</td>
        <td>“9->13”, “14->18”, “18-20”</td>
    </tr>
</table>

To manage the changes and updates in delivery dates and times, so they can be reflected to
customers on site and mobile app, when chosen order details in the checkout, we need to
create some endpoints, and integrate them into Project A website and admin interfaces.

-times
3) Attach city delivery times
Post /api/city/{city_id}/delivery-times 2 points
here you can add the JSON request params
4) Exclude some city delivery times span from some delivery dates 3 points
5) Exclude a city delivery date by excluding all of the daily delivery times 3 points
Website
In the checkout process
6) By sending the city id return all of its delivery dates times in this format (of coarse
excluded delivery dates, times shouldn't be returned)
Post api/city/{city_id}/delivery-dates-times/{number_of_days_to_get} 8 points
Response should be formatted in JSON format as follow (city_id=1 (Rabat)
number_of_days_to_get=2 ), the partner will only operates during the 06-11 (Almassira Aid)
from 14->18.

## How to use the project

<ol>
<li>
git clone https://github.com/dinabh/delivery-api.git
</li>
<li>
Create a database for example a Mysql database or sqlite etc ...
</li>
<li>
composer install
</li>
<li>
php artisan migrate
</li>
<li>
php artisan db:seed
</li>
</ol>
