<?php
print '108' + '15';       // 結果：123
print "\n";
print '108' + '1.5XYZ';   // 結果：109.5
print "\n";
print '108' + 'XYZ10';    // 結果：Warning: A non-numeric value encountered in this file on line 6. 108
print "\n";
print '108' + '1.5XYZ10'; // 結果：109.5
print "\n";
print '108' + '1.5E1';    // 結果：123
print "\n";
print '108' + '0b11';     // 結果：108
print "\n";
print '108' + '010';      // 結果：118
print "\n";
print '108' + '0x1A';     // 結果：108
print "\n";
