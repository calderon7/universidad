from abc import ABC
import time
import turtle
class Forma(ABC):
    def dibujar(self):
        pass
class EditorGrafico:
    def __init__(self, forma:Forma):
        self.forma = forma

    def dibujarForma(self):
        self.forma.dibujar
        print('dibuja una forma')

class Rectangulo(Forma):
    def dibujar(self):
        turtle.forward(100)
        turtle.right(90)
        turtle.forward(100)
        turtle.right(90)
        turtle.forward(100)
        turtle.right(90)
        turtle.forward(100)
class Circulo(Forma):
    def dibujar(self):
        turtle.circle(50)


if __name__ == '__main__':
    print (__name__)
    
    circulo1 = Circulo()
    circulo1 .dibujar()
    time.sleep(30)

    cuadrado1 = Rectangulo()
    cuadrado1.dibujar()
    time.sleep(30)