#!/bin/bash

export SYMFONY_ENV=dev
export HTTPS_PROXY=http://proxy1.in.ac-strasbourg.fr:8080
php bin/console ckeditor:install
