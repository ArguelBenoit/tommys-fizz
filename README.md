# Run with docker-compose
```
docker-compose up
```
# Make a mysql dump
- Launch the db container and run bash in interactive mode
- Go to the shared folder /data
- Give more possibilities to the dump.sh script
- Run the bash script dump.sh
### Example:
```
docker-compose start db && docker-compose exec db bash
cd /data
chmod +x dump.sh
sh dump.sh
```

# Import database
- launch the db container and run bash in interactive mode
- Go to the shared folder /data
- Give more possibilities to the restore.sh script
- Run the bash script restore.dump
### Example:
```
docker-compose start db && docker-compose exec db bash
cd /data
chmod +x restore.sh
sh restore.sh
```
