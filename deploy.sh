#!/bin/bash

echo "All is well for now, will write deploy code later"

#check if commit has [dp] tag

git log -1 --format="%s" | grep "\[dp\]"
RETVAL=$?

if [ $RETVAL -eq 0 ]
then

git archive -o deploy.zip HEAD

curl --user Gittu:$GITTU_VAR -F token=$GITTU_TOKEN -F "FileUpload=@deploy.zip" $GITTU_URL

fi
