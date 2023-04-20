from abc import ABC
class Enemy(ABC):
    def computeDamage()->int:
        pass

class ConcretEnemy(Enemy):
    def computeDamage(self)->str:
        print('OH NOOO')
        return 0

class EnemyDecorator(Enemy):
    def __init__(self, decoratedEnemy:Enemy):
        self.decoratedEnemy = decoratedEnemy

    def computeDamage(self)->int:
        print(self.decoratedEnemy.computeDamage(), 'Uyamoss')
        return 1
    
class EnemyDecorator2(Enemy):
    def __init__(self, decoratedEnemy:Enemy):
        self.decoratedEnemy = decoratedEnemy

    def computeDamage(self) -> int:
        print(self.decoratedEnemy.computeDamage(), 'Dispara')
        return 2

concreteEnemy = ConcretEnemy()
concreteEnemy = EnemyDecorator(EnemyDecorator2(EnemyDecorator(concreteEnemy)))
concreteEnemy.computeDamage()