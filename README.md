<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## ABOUT project_Youtube_API_clone
A practice where almost the entire basic framework of the Laravel framework and also add-ons are considered and applied. 
On the example of the backend.

## Laravel & Docker {https://laravel.com/docs/10.x#laravel-and-docker}

### Check if composer and docker are installed on your system? 
If not, here are the links: https://getcomposer.org/download/

https://docs.docker.com/

php artisan sail:install

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

sail build --no-cache  ( SELECT->0,3,5,7,8 )

sail up -d

sail artisan migrate:fresh --seed

## Notes:
If necessary, update the composer, if you receive errors, I recommend cleaning with the commands: 
1. php artisan route:cache
2. php artisan route:clear
3. php artisan config:clear
4. php artisan cache:clear
5. php artisan optimize
