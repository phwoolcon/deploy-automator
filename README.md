# Deploy Automator for Phwoolcon Projects

## Flow
1. Git push to `release` (or `staging`, `production`) branch;
1. Captures the push webhook (TODO);
1. Invoke `dep local:prepare prepare` to pull the codes;
1. Invoke `rsync` to push codes under `./working_dir/current` to the remote server(s);
1. Invoke `bin/cli migrate:up` and `bin/dump-autoload` on the remote server(s).

## Usage

### Requirements
* [`deployer`](https://github.com/deployphp/deployer)

### Installation
```bash
git clone git@github.com:phwoolcon/deploy-automator.git ./
composer update
```

### Create SSH Private Key
```bash
ssh-keygen -N "" -t rsa -b 4096 -C "deployer"
```
This will generates

### Remote Server User
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
