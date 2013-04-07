#!/bin/bash

echo "All is well for now, will write deploy code later"

#check if commit has [dp] tag
git log -1 --format="%s" | grep "\[dp\]" && echo "Hurray deploy it"

#git push to deployment server
