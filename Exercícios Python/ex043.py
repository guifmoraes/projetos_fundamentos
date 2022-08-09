r1 = float(input('| Digite o valor da 1° Reta: '))
r2 = float(input('| Digite o valor da 2° Reta: '))
r3 = float(input('| Digite o valor da 3° Reta: '))
print('-+-' * 25)
if r1 < r2 + r3 and r2 < r1 + r3 and r3 < r1 + r2:
    print('|  É possível formar um triângulo com as retas {:.2f}, {:.2f} e {:.2f}  |'.format(r1, r2, r3))
else:
    print('|  Não é possível formar um triângulo com as retas {:.2f}, {:.2f} e {:.2f}  |'.format(r1, r2, r3))
print('-+-' * 25)
