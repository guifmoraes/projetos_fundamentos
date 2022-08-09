n = int(input('Digite um número: '))
print('-+-' * 9)
if (n % 2) == 0:
    print('|   {} é um número par!   |'.format(n))
else:
    print('|  {} é um número ímpar!  |'.format(n))
print('-+-' * 9)
