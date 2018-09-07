# Reason
This repository is meant as a basic pthreads setup with Symfony Framework.
It will be used for error analysis and basis for opening issues at symfony and maybe pthreads.

# Usage
Build the container with e.g. `docker build -t symfony-pthread-test:latest . `

Start the container e.g. with: `docker run -it --rm --mount type=bind,source="$PWD",target=/usr/src/myapp --name symfony-pthread-test symfony-pthread-test`

It will directly open a bash shell that allows you to run the php console. Run the test command with: `bin/console app:thread-test`

