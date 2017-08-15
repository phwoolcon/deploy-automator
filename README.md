# Deploy Automator for Phwoolcon Projects

## Work Flow
1. `[You]`&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `bin/build` then `cd ignore/release` then `git push` to `release` (or `staging`, `production`) branch;
1. `[Automator]` Captures the push webhook;
1. `[Automator]` Invoke `dep local:prepare prepare` to pull the codes;
1. `[Automator]` Invoke `rsync` to push codes under `./workspace/current` to the remote server(s);
1. `[Automator]` Invoke `bin/cli migrate:up` and `bin/dump-autoload` on the remote server(s).

## Requirements
* [`Comopser`](https://github.com/composer/composer)
* [`Deployer`](https://github.com/deployphp/deployer)

## Usage

### 1. Install PHP
```bash
add-apt-repository ppa:ondrej/php
apt update
apt install php7.1-fpm php7.1-gd php7.1-cli php7.1-curl php7.1-dev php7.1-json php7.1-mbstring php7.1-mcrypt php7.1-mysql php7.1-xml php7.1-zip php-redis
```

### 2. Install Phalcon
```bash
curl -s https://packagecloud.io/install/repositories/phalcon/stable/script.deb.sh | bash
apt install php7.0-phalcon
```

### 3. Install Deploy Automator
```bash
git clone -b release git@github.com:phwoolcon/deploy-automator.git ./
```

### 4. Config Deploy Automator
```bash
vim app/config/production/app.php
```
```php
<?php
return [
    'enable_https' => true,                 // true if your site have https access, otherwise false
    'timezone' => 'Asia/Shanghai',          // Use your timezone
    'url' => 'https://deploy.example.com',  // Use your real site URL
];
```

```bash
vim app/config/production/database.php
```
```php
<?php
return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'host'       => '127.0.0.1',    // Use real server
            'username'   => 'dbuser',       // Use real username
            'password'   => 'dbpass',       // Use real password
            'dbname'     => 'dbname',       // Use real db name
        ],
    ],
];
```
### 5. Init Deploy Automator
```bash
sudo -H -u www-data bin/dump-autoload
sudo -H -u www-data bin/cli migrate:up
sudo -H -u www-data bin/dump-autoload
```

### 6. Nginx Setup
See [example/etc/nginx/](example/etc/nginx/)

### 7. Supervisor Setup
See [example/etc/supervisor/](example/etc/supervisor/)

### 8. Create SSH Private Key
```bash
sudo -H -u www-data ssh-keygen -N "" -t rsa -b 4096 -C "deployer"
```

### 9. Remote Server Setup
Create user `deployer` on the remote server to receive code pushes (via `rsync`, using `ssh` connection).

```bash
sudo adduser --disabled-password deployer
```
Grant `deployer` sudo permission to run as `www-data`, add sudo config:
```bash
sudo visudo -f /etc/sudoers.d/deployer
```
with content:
```ini
deployer ALL=(www-data) NOPASSWD:ALL
```
