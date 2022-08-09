n1 = int(input('| Digite o 1° Número: '))
n2 = int(input('| Digite o 2° Número: '))
n3 = int(input('| Digite o 3º Número: '))
menor = n1
maior = n1
if n2 < n1 and n2 < n3:
    menor = n2
if n3 < n1 and n3 < n2:
    menor = n3
if n2 > n1 and n2 > n3:
    maior = n2
if n3 > n1 and n3 > n2:
    maior = n3
print('-+-' * 14)
print('O menor número entre {}, {} e {} é {}'.format(n1, n2, n3, menor))
print('O maior número entre {}, {} e {} é {}'.format(n1, n2, n3, maior))
print('-+-' * 14)
