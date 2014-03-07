/*Owner & Copyrights: Vance King Saxbe. A.*/@echo off
setlocal enableextensions enabledelayedexpansion


cd Data
:while1

git add **/*.db
git commit -m %RANDOM%
git push

ping -n 15 127.0.0.1 > nul


        goto :while1
   
endlocal/*email to provide support at vancekingsaxbe@powerdominionenterprise.com, businessaffairs@powerdominionenterprise.com, For donations please write to fundraising@powerdominionenterprise.com*/