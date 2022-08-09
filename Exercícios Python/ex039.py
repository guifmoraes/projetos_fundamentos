d = float(input('Digite a distância da sua viagem em Km: '))
if d <= 200:
    p = d * 0.5
    print('Você pagará R$ {:.2f} de passagem de ônibus em um percurso de {:.2f} km'.format(p, d))
else:
    p = d * 0.45
    print('Você pagará R$ {:.2f} de passagem de ônibus em um percurso longo de {:.2f} km'.format(p, d))

# OPERADOR TERNÁRIO -> p = d * 0.50 if d <= 200 else d * 0.45
