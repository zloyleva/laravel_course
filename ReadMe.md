<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Laravel crash course

Use:
Terminal => Linux or MacOs (... or Windows)

DevDependencies:
1. Install git
2. Install docker
3. Install docker-compose
4. Install make

Load docker images and create containers || start containers
```bash
make start
```

Stop containers
```bash
make stop
```

Show all started containers
```bash
make show
```

Add SSL certificate
```bash
sudo docker run -it --rm --name certbot \
            -v "/etc/letsencrypt:/etc/letsencrypt" \
            -v "/var/lib/letsencrypt:/var/lib/letsencrypt" \
            -p 80:80  certbot/certbot certonly
```