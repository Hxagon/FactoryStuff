#!/bin/sh

docker build --file .docker/Dockerfile -t factory-stuff . && docker run --rm -p 8080:80 factory-stuff

