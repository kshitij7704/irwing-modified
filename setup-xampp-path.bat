@echo off
echo Adding XAMPP PHP to System PATH...
echo.
echo Please run this script as Administrator!
echo.
pause

:: Add XAMPP PHP to PATH
setx PATH "%PATH%;C:\xampp\php" /M

echo.
echo Done! PHP has been added to PATH.
echo Please restart your terminal for changes to take effect.
echo.
pause
