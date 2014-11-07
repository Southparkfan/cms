#!/bin/bash
#Author Addshore
#https://github.com/Orain/ansible-playbook/blob/master/.travis.phplint.sh
find ./ -type f -regex '.*\.php\|.*\.php\.j2' -exec php -l {} \; | grep "Errors parsing ";
#Flip the exit code
if [ $? -ne 0 ]
then
	exit 0
else
	exit 1
fi
