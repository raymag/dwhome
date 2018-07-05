import pymysql

def connect():
    con = pymysql.connect(
    host="localhost",
    user="root",
    password="root",
    db="torcida"
    )
    return con

def delTorcedor():
    con = connect()
    idTorcedor = input("ID do Torcedor: ")
    try:
        with con.cursor() as cursor:
            sql = '''
DELETE FROM pessoas WHERE id = {}
'''
            result = cursor.execute(sql.format(idTorcedor))
            print("Torcedor removido")
        con.commit()
    finally:
        con.close()    

def addTorcedor():
    con = connect()
    nome = input('Nome: ')
    sexo = input('Sexo: ')
    sexo = sexo.upper()
    time_preferido = input('ID do Time: ')
    try:
        with con.cursor() as cursor:
            sql = '''
INSERT INTO pessoas (nome, sexo, time_preferido)
VALUES (%s, %s, %s)
'''
            result = cursor.execute(sql, (nome, sexo, time_preferido))
            print("Torcedor adicionado")
        con.commit()
    finally:
        con.close()

def searchTorcedor():
    con = connect()
    nome = input('Nome: ')
    try:
        with con.cursor() as cursor:
            sql = '''

SELECT pessoas.id, pessoas.nome, clubes.nome
FROM pessoas JOIN clubes
WHERE pessoas.nome like '%{}%'
AND pessoas.time_preferido = clubes.id
'''
            cursor.execute(sql.format(nome))
            resultado = cursor.fetchall()
            for i in resultado:
                print("ID: "+str(i[0]))
                print("Nome: "+str(i[1]))
                print("Time: "+str(i[2]))
                print("="*30)
        con.commit()
    finally:
        con.close()
while True:
    print('''
Escolha uma opção:
\t1 - Adicionar torcedor
\t2 - Procurar Torcedor
\ts - Sair do Programa
''')
    op = input()
    if op == 's':
        break
    elif op == '1':
        addTorcedor()
    elif op == '2':
        searchTorcedor()
