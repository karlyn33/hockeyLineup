# Hockey Line Up

### Hacktoberfest 2022
Last days before the end. Still easy task to do to complete the challenge and to contribute.
- Look at issues to select a task.
- First good PR will be accepted.

## Description

With Hockey Line Up, you can know who will play each week and last weeks. Manager can modify line up and send new line up on facebook easily.

## Planning

- [ ] Show Line Up (Public/Private)
- [ ] Add/Edit Leagues
- [x] Admin Access
- [ ] List Players
- [ ] Add/Edit Players
- [ ] Add Schedule

## Initial Setup
1. `git clone`
2. Move into the folder
3. Install dependencies :
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
4. Create .env from example file : `cp .env.example .env`
5. Start dockers : `./vendor/bin/sail up -d`
6. Generate key `./vendor/bin/sail php artisan key:generate`
7. Install migration `./vendor/bin/sail php artisan migrate`

### Other links
- [Readme Laravel](LARAVEL-README.md)

## Contribution 
- [Contribution Rules](CONTRIBUTING.md)


