#!/bin/bash

until nc -z db 5432; do
  echo "Aguardando o banco de dados ficar disponível..."
  sleep 2
done

if ! php artisan migrate:status > /dev/null 2>&1; then
  echo "Rodando migrations pela primeira vez..."
  php artisan migrate --force
  php artisan db:seed --force
else
  echo "Migrations já foram aplicadas, ignorando..."
fi

exec apache2-foreground
