### Installation

git clone 

cd redpanda

composer install

cp .env.example .env

fill .env

php artisan serve

### Endpoints

An official Rubic's cube notations applied in the app. 

According official Rubic's cube notation, possible movements are 'U', 'D', 'R', 'L', 'F', 'B', 'M', 'E' and 'S'. And possible movements directions are 'direct' (clockwise) and 'counter' ( counter-clockwise)

- - -
Generates a new cube and store it to database

GET ```http://127.0.0.1/api/new```
- - -

Returns current cube

GET ```http://127.0.0.1/api/current```
- - -

Make a movement

POST ```http://127.0.0.1/api/movement```

body

```json
{
    "movement": "S",
    "direction": "counter"
}
```
- - -

### Testing
```
 php artisan test --env=testing
```
