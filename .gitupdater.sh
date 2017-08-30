#!/bin/bash

git pull -u origin master
git add -A
git commit -am "`date`"
git push -u origin master
