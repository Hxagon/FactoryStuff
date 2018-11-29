## Important:
After every change, rebuild and restart the docker, just use ```./docker_restart.sh```

## 1. Create autoloading 
```composer install```

## 2. Build docker image
```docker build --file .docker/Dockerfile -t factory-stuff .```

## 3. Start docker
```docker run --rm -p 8080:80 factory-stuff```

## Known issues
#### Can't run ./docker_restart.sh:
Just run ```chmod +x docker_restart.sh``` in terminal
