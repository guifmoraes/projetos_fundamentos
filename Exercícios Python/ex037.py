v = float(input('Digite a Velocidade que o Veículo passou: '))
print('-+-' * 20)
if v > 80.0:
    print('| VOCÊ FOI MULTADO EM R$ {:.2f} POR ULTRAPASSAR O LIMITE DE VELOCIDADE DE 80 KM/H! |'.format((v - 80) * 7))
else:
    print('|  Você respeitou os limites de velocidade, fique tranquilo.  |')
print('|  Você estava a {:.2f} km/h quando foi visto pelo radar!  |'.format(v))
print('-+-' * 20)
