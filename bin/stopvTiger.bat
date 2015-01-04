
@echo off
cd ..
set mysql_dir=C:\vtigerCRM610\mysql
set mysql_username=root
set mysql_password=123456789
set mysql_port=33307
set mysql_bundled=true
set apache_dir=C:\vtigerCRM610\apache
set apache_bin=C:\vtigerCRM610\apache\bin
set apache_conf=C:\vtigerCRM610\apache\conf
set apache_port=8888
set apache_bundled=true
set apache_service=true

set VTIGER_HOME=%cd%

if %apache_bundled% == true goto StopApacheCheck
goto StopMySQL

:StopApacheCheck
if %apache_service% == true goto StopApacheService
cd /d %apache_dir%
rem shut down apache
echo ""
echo "stopping vtigercrm APACHE"
echo ""
bin\ShutdownApache logs\httpd.pid
goto StopMySQL

:StopApacheService
cd /d %apache_dir%
rem shut down apache
echo ""
echo "stopping vtigercrmApache600 APACHE service"
echo ""
bin\httpd -n vtigercrmApache600 -k stop
echo ""
echo "uninstalling vtigercrmApache600 APACHE service"
echo ""
bin\httpd -k uninstall -n vtigercrmApache600
rem .\bin\ShutdownApache.exe logs\httpd.pid
goto StopMySQL

:StopMySQL
if %mysql_bundled% == true (
	rem cd /d %VTIGER_HOME%\mysql\bin
	rem  shutdown mysql
	cd /d %mysql_dir%\bin
	mysqladmin --port=%mysql_port% --user=%mysql_username% --password=%mysql_password% shutdown
	echo ""
	echo "vtiger CRM  MySQL Sever is shut down"
	echo ""
	echo ""
	echo "uninstalling vtigercrmMysql600 MYSQL service"
	echo ""
mysqladmin shutdown
mysqld --remove vtigercrmMysql600
	cd /d %VTIGER_HOME%\bin
)