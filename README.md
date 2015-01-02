templateparser
==============

parse token and replace its value from massage strings. 

example :
before parse
abc {company} def {name} ijk {name} lmn {company} opq {testtoken} rst {notexists} uvw {name} xyz.
after parse
abc MY COMPANY def MY NAME ijk MY NAME lmn MY COMPANY opq TESTTOKEN rst uvw MY NAME xyz. 
