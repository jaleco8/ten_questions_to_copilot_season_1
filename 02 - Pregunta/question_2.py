import random

numero = random.randint(1, 100)
intentos = 5

while intentos > 0:
    adivinanza = int(input("Adivina el número (entre 1 y 100): "))
    if adivinanza == numero:
        print("¡Felicidades! Has adivinado el número.")
        break
    elif adivinanza < numero:
        print("El número es mayor.")
        intentos -= 1
    else:
        print("El número es menor.")
        intentos -= 1

if intentos == 0:
    print("Lo siento, has perdido. El número era", numero)