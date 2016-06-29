Here on GitHub, this hello-docker directory contains both the Dockerfile and the php script (hello-docker.php).

However there is an easier way to run hello-docker than pulling and building it from GitHub. You can use the docker image I uploaded to Docker Hub (for reference, [here is the link to my Docker Hub profile.] (https://hub.docker.com/u/ledingto/))

Assuming you have Docker installed, please navigate to an empty directory locally on your computer. From this directory in the command line, type:
` docker run ledingto/hello-docker ` + return

This command will check to see if you have an existing image ‘ledingto/hello-docker’ and since you most likely do not Docker will pull ‘ledingto/hello-docker’ from Docker Hub and run it.
The results:
1) You will have an image called ‘ledingto/hello-docker’ locally. Type ` docker images ` + return to confirm this.
2) You will see a line printed in the console that says “Hello, Docker”. This is the output of the php script that the Dockerfile used (a result of running the image ‘ledingto/hello-docker’).