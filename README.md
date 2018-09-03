# Reason
This repository is meant as a basic pthreads setup with Symfony Framework.
It will be used for error analysis and basis for opening issues at symfony and maybe pthreads.

#Usage
Build the container with e.g. `docker build -t symfony-pthread-test:latest . `

Start the container e.g. with: `docker run -it --rm --mount type=bind,source="$PWD",target=/usr/src/myapp --name symfony-pthread-test symfony-pthread-test`

Enter the container with `docker exec -it symfony-pthread-test /bin/bash` and start the symfony command with `bin/console app:thread-test` to see the error


