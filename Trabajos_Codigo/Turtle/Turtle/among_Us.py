from abc import ABC
import time
import turtle

class AmongUs(ABC):
    def dibujar(self):
        pass

class Body(AmongUs):
    def dibujar(self):
        turtle.speed(10)
        turtle.pensize(20)

        turtle.fillcolor('red')
        turtle.begin_fill()

        turtle.right(90)
        turtle.forward(50)
        turtle.right(180)
        turtle.circle(40, -180)
        turtle.right(180)
        turtle.forward(200)

        turtle.right(180)
        turtle.circle(100, -180)

        turtle.backward(20)
        turtle.left(15)
        turtle.circle(500, -20)
        turtle.backward(20)

        turtle.circle(40, -180)

        turtle.left(7)
        turtle.backward(50)

        turtle.up()
        turtle.left(90)
        turtle.forward(10)
        turtle.right(90)
        turtle.down()
        turtle.right(240)
        turtle.circle(50, -70)

        turtle.end_fill()

class Glass(AmongUs):
    def dibujar(self):
        turtle.up()
        turtle.right(230)
        turtle.forward(100)
        turtle.left(90)
        turtle.forward(20)
        turtle.right(90)

        turtle.down()
        turtle.fillcolor('skyblue')
        turtle.begin_fill()

        turtle.right(150)
        turtle.circle(90, -55)

        turtle.right(180)
        turtle.forward(1)
        turtle.right(180)
        turtle.circle(10, -65)
        turtle.right(180)
        turtle.forward(110)
        turtle.right(180)

        turtle.circle(50, -190)
        turtle.right(170)
        turtle.forward(80)

        turtle.right(180)
        turtle.circle(45, -30)

        turtle.end_fill()

class Bag(AmongUs):
    def dibujar(self):
        turtle.up()
        turtle.right(60)
        turtle.forward(100)
        turtle.right(90)
        turtle.forward(75)

        turtle.fillcolor('#3E1B13')
        turtle.begin_fill()

        turtle.down()
        turtle.forward(30)
        turtle.right(255)

        turtle.circle(300, -30)
        turtle.right(260)
        turtle.forward(30)

        turtle.end_fill()

amongus_body = Body()
amongus_glass = Glass()
amongus_bag = Bag()

amongus_body.dibujar()
time.sleep(30)
amongus_glass.dibujar()
time.sleep(30)
amongus_bag.dibujar()
time.sleep(30)




