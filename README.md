# PMMS
SEP Project 2023

## Step to run
1. Clone this repository
2. Open VSCode and open the folder
3. Copy `.env.example` and rename it to `.env`
4. Open a terminal and Run `composer install`
5. Run `npm install`
6. Run `php artisan key:generate`
7. Run `php artisan migrate:fresh --seed`
8. Open a terminal and Run `npm run dev` 
9. Open a terminal and Run `php artisan serve` to start the server
10. Open a browser and go to `http://localhost:8000` or as stated in the terminal
11. Use the following credentials to login
    - Admin
        - Username: admin@test
        - Password: test

## Integration Plan
- [ ] User
- [x] Inventory
- [x] Payment
- [x] Report
- [ ] Duty Roster
- [x] Announcement
