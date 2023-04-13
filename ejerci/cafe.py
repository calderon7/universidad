from abc import ABC, abstractmethod


class Cafe(ABC):
    def __init__(self) -> None:
        self.descripcion = 'Whatever Cafe'

    def set_descripcion(self, valor: str) -> None:
        self.descripcion = valor

    def getDescripcion(self) -> str:
        return self.descripcion

    @abstractmethod
    def calcular_costo(self) -> float:
        pass


class Frapucciono(Cafe):
    def __init__(self) -> None:
        self.descripcion = 'Frapucciono'

    def calcular_costo(self) -> float:
        return 1.99


class Latte(Cafe):
    def __init__(self) -> None:
        self.descripcion = 'Latte'

    def calcular_costo(self) -> float:
        return 1.85


class CremaBatida(Cafe):
    def __init__(self, cafe: Cafe):
        self.cafe = cafe
        self.descripcion = 'descripcion'

    def getDescripcion(self) -> str:
        return f'{self.cafe.getDescripcion()} con crema batida'

    def calcular_costo(self) -> float:
        return self.cafe.calcular_costo() + 1


class Leche(Cafe):
    def __init__(self, cafe: Cafe):
        self.cafe = cafe
        self.descripcion = 'descripcion'

    def getDescripcion(self) -> str:
        return f'{self.cafe.getDescripcion()} con leche'

    def calcular_costo(self) -> float:
        return self.cafe.calcular_costo() + 0.5


class Helado(Cafe):
    def __init__(self, cafe: Cafe):
        self.cafe = cafe
        self.descripcion = 'descripcion'

    def getDescripcion(self) -> str:
        return f'{self.cafe.getDescripcion()} con healdo'

    def calcular_costo(self) -> float:
        return self.cafe.calcular_costo() + 2.5
    
def ver_Detalle(cafe:Cafe) -> None:
    print(f"{cafe.getDescripcion()} cuesta {cafe.calcular_costo()}")

if __name__ == '__main__':
    cafe1 = Frapucciono()
    cafe1 = Helado(Leche(Helado(CremaBatida(cafe1))))
    ver_Detalle(cafe1)

