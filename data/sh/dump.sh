#!/bin/bash

rm -f $MYSQL_DATABASE.sql

mysqldump --user=$MYSQL_USER --password=$MYSQL_ROOT_PASSWORD --databases $MYSQL_DATABASE > /sh/$MYSQL_DATABASE.sql
