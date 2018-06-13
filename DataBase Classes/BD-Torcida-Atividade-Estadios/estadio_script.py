design = '''
	INSERT INTO estadios (nome, apelido, capacidade) VALUES ("{}", "{}", {});
'''
sql = ""
dataset = '''
Estádio Raimundo Sampaio,
Independência,
23018
.
Estádio Joaquim Américo Guimarães,
Arena da Baixada,
42370
.
Complexo Esportivo Cultural Octávio Mangabeira,
Fonte Nova,
47907
.
Estádio Olímpico Nilton Santos,
Nilton Santos,
44661
.
Estádio Governador Plácido Castelo,
Arena Castelão,
63903
.
Arena Condá,
Arena Condá,
20089
.
Arena Corinthians,
Itaquerão,
47605
.
Estádio Governador Magalhães Pinto,
Mineirão,
61846
.
Estádio Luso-Brasileiro,
Ilha do Urubu,
20500
.
Estádio Jornalista Mário Filho,
Maracanã,
78838
.
Arena do Grêmio,
Arena do Grêmio,
55662
.
Estádio José Pinheiro Borda,
Gigante da Beira-Rio,
50128
.
Allianz Parque,
Arena Palmeiras,
43713
.
Estádio Durival Britto e Silva,
Vila Capanema,
20083
.
Estádio Urbano Caldeira,
Vila Belmiro,
16068
.
Estádio Cícero Pompeu de Toledo,
Morumbi,
77011
.
Estádio Adelmar da Costa Carvalho,
Caldeirão da Ilha,
30000
.
Estádio Vasco da Gama,
São Januário,
21880
.
Estádio Manoel Barradas,
Barradão,
30618
'''
dataset = dataset.replace("\n", "")
estadios = []
for estadio in dataset.split("."):
	estadios.append(estadio.split(","))
#+++++++++++++++++++++++++++++++++++++++++++++
for estadio in estadios:
	sql += design.format(estadio[0], estadio[1], estadio[2])
print(sql)