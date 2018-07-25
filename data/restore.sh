#!/bin/bash

mysql -p -h localhost $MYSQL_DATABASE < $MYSQL_DATABASE.sql
