import pymysql

def connect():
    con = pymysql.connect(
    host="localhost",
    user="root",
    password="root",
    db="torcida"
    )
    return con

def searchTeam(team): #Retorna Times a partir de um nome
    con = connect()
    try:
        with con.cursor() as cursor:
            sql = '''
SELECT id, nome FROM clubes WHERE nome LIKE '%{}%'
'''
            cursor.execute(sql.format(team))
            result = cursor.fetchall()
            for team in result:
                print("\n")
                print("ID: ", team[0])
                print("Nome: ", team[1])
                print("="*30)
                print("\n")
        con.commit()
    finally:
        con.close()

def setTorcedorColumn(): #Altera colunas de torcedores
    con = connect()
    ID = input("ID: ")
    print('''
Escolha o campo desejado:
\t1 - Nome
\t2 - Sexo
\t3 - ID_Time
''')
    opt = input("=> ")
    if opt == '1':
        opt = 'nome'
    elif opt == '2':
        opt = 'sexo'
    elif opt == '3':
        print('''
Insira o nome do time:
''')
        time = input("=> ")
        searchTeam(time)
        opt = 'time_preferido'
    
    print('''
Insira o valor desejado:
''')
    val = input("=> ")
    

    try:
        with con.cursor() as cursor:
            sql = '''
UPDATE pessoas
SET {} = '{}'
WHERE id = {}
'''
            result = cursor.execute(sql.format( opt, val, ID ))
            print("Torcedor Atualizado")
            print("="*30)
            print("\n")
        con.commit()
    finally:
        con.close()    
        

def attTorcedor(): #Atualiza os torcedores
    opt = input('''
\nOpções:
\t1 - Inserir ID
\t2 - Procurar Torcedor\n
---> 
''')
    if opt == '1':
        setTorcedorColumn()
    elif opt == '2':
        searchTorcedor()

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
    nome = input('\nNome: ')
    try:
        with con.cursor() as cursor:
            sql = '''

SELECT pessoas.id, pessoas.nome, pessoas.sexo, clubes.nome
FROM pessoas JOIN clubes
WHERE pessoas.nome like '%{}%'
AND pessoas.time_preferido = clubes.id
'''
            cursor.execute(sql.format(nome))
            resultado = cursor.fetchall()
            for i in resultado:
                print("\n")
                print("ID: "+str(i[0]))
                print("Nome: "+str(i[1]))
                print("Sexo: "+str(i[2]))
                print("Time: "+str(i[3]))
                print("="*30)
        con.commit()
    finally:
        con.close()
while True:
    print('''
Escolha uma opção:
\t1 - Adicionar torcedor
\t2 - Procurar Torcedor
\t3 - Remover Torcedor
\t4 - Atualizar Dados do Torcedor
\ts - Sair do Programa
''')
    op = input()
    if op == 's':
        break
    elif op == '1':
        addTorcedor()
    elif op == '2':
        searchTorcedor()
    elif op == '3':
        delTorcedor()
    elif op == '4':
        attTorcedor()
