#!/usr/bin/env bash
cd "$( dirname "${BASH_SOURCE[0]}" )"
script -q -c 'dep -v local:prepare prepare && dep -vvv deploy production' working_dir/logs/`date +"%Y%m%d-%H%M%S"`.log
dep deploy:unlock prepare > /dev/null
