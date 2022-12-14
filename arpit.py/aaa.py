import re
bat=re.compile(r'Bat(wo)+man')
mo1=bat.search('The Adventures of Batwoman')
print(mo1.group())


