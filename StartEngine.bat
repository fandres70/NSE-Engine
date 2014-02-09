@echo off
setlocal enableextensions enabledelayedexpansion


cd Data
:while1

git add **/*.db
git commit -m %RANDOM%
git push

ping -n 15 127.0.0.1 > nul


        goto :while1
   
endlocal