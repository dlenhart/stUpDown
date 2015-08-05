
;Run PS UP/Down script * hide window with @SW_HIDE
;Drew Lenhart
#include <Constants.au3>

;path
$I = "C:\stUPdownP3\stUpDown.ps1"

;execute & hide window
$rc = Run("PowerShell.exe -ExecutionPolicy Bypass -File " & $I, "", @SW_HIDE)

If $rc = 1 Then
   MsgBox($mb_systemmodal, "ERROR", "Something happened with the script!", 10)
EndIf
