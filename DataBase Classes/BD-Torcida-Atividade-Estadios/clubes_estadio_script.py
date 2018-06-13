design = '''
UPDATE clubes
SET estadio_oficial = {}
WHERE id = {};
'''
sql = '''
UPDATE clubes
SET estadio_oficial = 1
WHERE id = 1;
'''
id_clubes = 2
id_estadio = 1

while(id_clubes<=20):
	sql+=design.format(id_estadio, id_clubes)
	id_estadio+=1
	id_clubes+=1
print(sql)