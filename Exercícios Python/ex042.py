s = float(input('| Digite o seu salário para receber um aumento: R$ '))
print('-+-' * 30)
if s > 1250.00:
    sf = s + (s * 0.1)
    print('|  Seu salário inicial de R$ {:.2f}, com um aumento de 10% se tornou R$ {:.2f}  |'.format(s, sf))
else:
    sf = s + (s * 0.15)
    print('|  Seu salário inicial de R$ {:.2f}, com um aumento de 15% se tornou R$ {:.2f}  |'.format(s, sf))
print('-+-' * 30)
